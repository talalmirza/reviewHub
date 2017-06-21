<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MembersTableSeeder::class);
        $this->command->info('5 Members table seeded!');

        $this->call(ReviewersTableSeeder::class);
        $this->command->info('5 Reviewers table seeded!');

        $this->call(VisitorsTableSeeder::class);
        $this->command->info('5 Visitors table seeded!');

        $this->call(CategoriesTableSeeder::class);
        $this->command->info('6 Hardcoded with vector images Categories table seeded!');

        $this->call(CommentsTableSeeder::class);
        $this->command->info('5 Comments table seeded!');

        $this->call(LikesTableSeeder::class);
        $this->command->info('5 Likes table seeded!');

        $this->call(MacadressesTableSeeder::class);
        $this->command->info('5 Macadresses table seeded!');

        $this->call(RanksTableSeeder::class);
        $this->command->info('5 Ranks table seeded!');

        $this->call(ReviewsTableSeeder::class);
        $this->command->info('6 Reviews table seeded!');

        $this->call(TagsTableSeeder::class);
        $this->command->info('5 Tags table seeded!');

        $this->call(Macaddress_MemberTableSeeders::class);
        $this->command->info('1 Macaddress_Member Table value seeded! With IDs 1,1');

        $this->call(Member_ReviewerTableSeeders::class);
        $this->command->info('1 Member_Reviewer Table value seeded! With IDs 1,1');

        $this->call(Review_TagTableSeeders::class);
        $this->command->info('1 Review_Tag Table value seeded! With IDs 1,1');

    }
}
