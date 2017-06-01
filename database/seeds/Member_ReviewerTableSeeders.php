<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Member_ReviewerTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_reviewer')->delete();
        $faker = Faker::create('en_US');

        DB::table('member_reviewer')->insert([
            'member_id' => 1,
            'reviewer_id' => 1,
        ]);
    }
}
