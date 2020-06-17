<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 3)->create();
        factory(App\Film::class, 6)->create();
        factory(App\Comment::class, 20)->create();

        // $this->call(UserSeeder::class);
    }
}
