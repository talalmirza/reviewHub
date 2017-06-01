<?php

use Illuminate\Database\Seeder;
use App\Visitor;
use Faker\Factory as Faker;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Visitor::create(array(
            ));
        }
    }
}
