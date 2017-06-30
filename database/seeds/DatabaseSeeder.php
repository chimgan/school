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
        factory(App\User::class, 50)->create();
        factory(App\Developer::class, 50)->create();
        factory(App\Technology::class, 50)->create();
        factory(App\Project::class, 50)->create();
//        $this->call(DevelopersTableSeeder::class);
//        $this->call(ProjectsTableSeeder::class);
//        $this->call(TechnologiesTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
    }
}
