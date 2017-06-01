<?php

use Illuminate\Database\Seeder;
use App\Macaddress;
use Faker\Factory as Faker;

class MacadressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('macaddresses')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Macaddress::create(array(
                'macaddress' => $faker->macAddress              ,

            ));
        }
    }
}
