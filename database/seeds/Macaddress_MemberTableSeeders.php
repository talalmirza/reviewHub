<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Macaddress_MemberTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('macaddress_member')->delete();
        $faker = Faker::create('en_US');

        DB::table('macaddress_member')->insert([
            'macaddress_id' => $faker->numberBetween($min = 1, $max = 5),
            'member_id' => $faker->numberBetween($min = 1, $max = 5)
        ]);
    }
}
