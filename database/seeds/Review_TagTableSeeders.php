<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Review_TagTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_tag')->delete();
        $faker = Faker::create('en_US');

        DB::table('review_tag')->insert([
            'review_id' => 1,
            'tag_id' => 1,
        ]);

    }
}
