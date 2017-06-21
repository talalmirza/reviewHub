<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $faker = Faker::create('en_US');


        Category::create(array(
            'name' => 'Food',
            'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            'vector' => '256-256-d13cafbf17ecd8f2065c8842a6e4e228.png'
        ));

        Category::create(array(
            'name' => 'Movies',
            'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            'vector' => 'Movie alt 512x512.png'
        ));

        Category::create(array(
            'name' => 'Music',
            'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            'vector' => 'music.png'
        ));

        Category::create(array(
            'name' => 'Mobile',
            'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            'vector' => 'smartphone_318-33441.png'
        ));

        Category::create(array(
            'name' => 'PC-Laptop',
            'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            'vector' => 'laptop-png-6749.png'
        ));

        Category::create(array(
            'name' => 'Electronics',
            'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            'vector' => 'desktop-computer-with-screen-vector-icon-800x566.png'
        ));

    }
}
