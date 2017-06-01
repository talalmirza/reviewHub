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


        foreach (range(1, 5) as $index) {

            Category::create(array(
                'name' => $faker->unique()->randomElement($array = array('Food','Movies', 'Mobile', 'Electronics','Music')),
                'paladin_id' => $faker->numberBetween($min = 1, $max = 5),
            ));
        }
    }
}
