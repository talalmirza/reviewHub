<?php

use Illuminate\Database\Seeder;
use App\Reviewer;
use Faker\Factory as Faker;

class ReviewersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviewers')->delete();
        $faker = Faker::create('en_US');


        foreach (range(1, 5) as $index) {

            Reviewer::create(array(
                'username' => $faker->unique()->userName,
                'profile_url' => $faker->unique()->userName,
                'password' => bcrypt($faker->name),
                'email' => $faker->unique()->freeEmail,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'avatar' => $faker->imageUrl($width = 640, $height = 480),
                'date_of_birth' => $faker->date,
                'city' => $faker->randomElement($array = array('Lahore', 'Peshawar', 'Karachi')),
                'region' => $faker->randomElement($array = array('Punjab', 'KPK', 'Sindh')),
                'contact' => $faker->e164PhoneNumber,
                'gender' => $faker->boolean,
                'about' => $faker->realText,
                'rank_id' => $faker->numberBetween($min = 1, $max = 5),
                'rating' => $faker->numberBetween($min = 0, $max = 5)
            ));
        }
    }
}
