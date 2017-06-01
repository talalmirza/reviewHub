<?php

use Illuminate\Database\Seeder;
use App\Like;
use Faker\Factory as Faker;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Like::create(array(
                'member_id' => $faker->unique()->numberBetween($min = 1, $max = 5),
                'review_id' => $faker->numberBetween($min = 1, $max = 5)

            ));
        }
    }
}
