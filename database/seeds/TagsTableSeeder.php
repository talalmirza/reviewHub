<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Tag::create(array(
                'name' => $faker->unique()->word
            ));
        }
    }
}
