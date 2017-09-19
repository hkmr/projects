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
        // factory(App\Post::class, 100)->create();
        // factory(App\User::class, 20)->create();
        factory(App\Comment::class, 3000)->create();
    }
}
