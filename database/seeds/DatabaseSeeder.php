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
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(ComparisonsTableSeeder::class);
        $this->call(ResponsesTableSeeder::class);
    }
}
