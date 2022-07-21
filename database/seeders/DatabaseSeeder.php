<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Country::factory(10)->create();
        \App\Models\User::factory(5)->create();
         \App\Models\Post::factory(5)->create();
         \App\Models\Comment::factory(5)->create();
     
    } 


    
}
