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
        $this->call(UserCategoriesSeeder::class);
        $this->call(AddQuestionInTable::class);
        $this->call(AddAdminTable::class);
    }
}
