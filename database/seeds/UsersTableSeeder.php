<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use this user for login as admin
        User::create(['name' => 'polash','email' => 'polash@gmail.com','password' => bcrypt('1')]);
        //Use this user for login as user
        User::create(['name' => 'nayem','email' => 'nayem@gmail.com','password' => bcrypt('1')]);

        User::create(['name' => 'admin','email' => 'admin@gmail.com','password' => bcrypt('1')]);
        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
