<?php

use Illuminate\Database\Seeder;
use App\Review;
use Faker\Factory as Faker;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Review::create(array(
                'title' => $faker->realText($faker->numberBetween(10,20)),
                'caption' => $faker->realText($faker->numberBetween(10,20)),
                'body' => $faker->realText,
                'featureimage' => $faker->imageUrl($width = 640, $height = 480),
                'category_id' => $faker->numberBetween($min = 1, $max = 5),
                'reviewer_id' => $faker->numberBetween($min = 1, $max = 5),

            ));
        }
    }
}
