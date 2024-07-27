<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = ['Laravel', 'Vue.js', 'Tailwindcss', 'Inertia', 'Breeze', 'Jetstream', 'Fortify', 'Scout', 'Sanctum', 'Socialite'];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}
