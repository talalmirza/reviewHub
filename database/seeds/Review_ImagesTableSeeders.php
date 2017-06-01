<?php

use Illuminate\Database\Seeder;
use App\ReviewImage;
use Faker\Factory as Faker;

class Review_ImagesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_images')->delete();
        $faker = Faker::create('en_US');

        foreach (range(1, 5) as $index) {

            ReviewImage::create(array(
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'review_id' => $faker->numberBetween($min = 1, $max = 5)

            ));
        }

    }
}
