<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin11',
            'is_admin' => true,
        ]);

        $this->call(TagSeeder::class);
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
        ]);
        // Course::factory(25)
          // ->published()
          //->has(Lesson::factory(25)->published())
         //  ->create();
    }
}
