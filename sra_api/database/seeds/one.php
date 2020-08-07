<?php

use Illuminate\Database\Seeder;
use App\Blog;

class one extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 100; $i++) {
            Blog::create([
                'name' => $faker->name
            ]);
        }
    }
}
