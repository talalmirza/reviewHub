<?php

use Illuminate\Database\Seeder;
use App\Comment;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Comment::create(array(
                'body' => $faker->sentence,
                'member_id' => $faker->unique()->numberBetween($min = 1, $max = 5),
                'review_id' => $faker->numberBetween($min = 1, $max = 5)
            ));
        }
    }
}
