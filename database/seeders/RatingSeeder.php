<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\author;
use App\Models\post;
class ratingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\rating::factory()
        ->has(author::factory(), 'author')
        ->has(post::factory(), 'post')
        ->count(100)
        ->create();
    }
}
