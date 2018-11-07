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
        DB::connection('pgsql')->table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        /*


        $this->call(PostTableSeeder::class);
        $this->call(MessageSeeder::class);
         */
    }
}
