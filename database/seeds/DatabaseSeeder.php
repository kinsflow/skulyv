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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Result::class, 5)->create();
        factory(App\User::class, 5)->create();
        factory(App\Profile::class, 5)->create();
        factory(App\Assignment::class, 5)->create();
        factory(App\Payment::class, 5)->create();
        factory(App\ClassName::class, 5)->create();
        factory(App\Post::class, 5)->create();
    }
}
