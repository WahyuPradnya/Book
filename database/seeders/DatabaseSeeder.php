<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
    $faker = Faker::create();
 
        for($i = 1; $i <= 100; $i++){
        DB::table('project')->insert([
            'book' => $faker->name,
            'category' => $faker->company,
            'author' => $faker->name,
            'rating' => null,
            'voter' => $faker->numberBetween(1,50000),
        ]);
    }
 
  
}
}