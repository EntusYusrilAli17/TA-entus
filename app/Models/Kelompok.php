<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelompok extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function users():HasMany
    {
        return $this->hasMany(User::class, 'kelompok_id', 'id');
    }

    public function asets(): HasMany
    {
        return $this->hasMany(Aset::class, 'kelompok_id', 'id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'kelompok_id', 'id');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Product::class, 'kelompok_id', 'id');
    }
}
