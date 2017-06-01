<?php

use Illuminate\Database\Seeder;
use App\Rank;
use Faker\Factory as Faker;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Rank::create(array(
                'title' => $faker->unique()->randomElement($array = array('Noob', 'Bronze', 'Silver','Gold','Paladin')),
            ));
        }
    }
}
