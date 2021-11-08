<?php

use App\User;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Juan",
            "email" => "juan@gmail.com",
            "password" => bcrypt('123456789')
        ]);
    }
}
