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
        // $this->call(UserSeeder::class);
        App\User::create([
            'name' => 'Mario Astudillo',
            'email' => 'm@admin.com',
            'password' => bcrypt('123456')
            
        ]);

        factory(App\Post::class, 24)->create();
    }
}
