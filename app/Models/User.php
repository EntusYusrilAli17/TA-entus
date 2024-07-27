<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Determine if the user can access the Filament admin panel.
     *
     * @return bool
     */
    public function canAccessFilament(): bool
    {
        // Allow access if the user is an admin
        return $this->is_admin; // Assumes there is an 'is_admin' column in your users table
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin'          => 'boolean',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return $this->is_admin;
        }

        return true;
    }

    public function kelompok(): BelongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function completedLessons(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class)->published();
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function completeLesson(Lesson $lesson): void
    {
        $this->completedLessons()->attach($lesson);
        $this->courses()->syncWithoutDetaching($lesson->course_id);
    }

    public function uncompleteLesson(Lesson $lesson): void
    {
        $this->completedLessons()->detach($lesson);
        $courseLessons = $lesson->course->lessons()->pluck('id')->toArray();

        if (!$this->completedLessons()->whereIn('id', $courseLessons)->exists()) {
            $this->courses()->detach($lesson->course_id);
        }
    }
}
