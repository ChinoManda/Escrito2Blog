<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\author;
class PostSeeder extends Seeder
{

    public function run()
    {
        \App\Models\post::factory()
        ->has(author::factory(), 'author')
        ->count(100)
        ->create();
    }
}
