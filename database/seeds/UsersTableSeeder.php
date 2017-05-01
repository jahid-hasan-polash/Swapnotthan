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
    	$users = [
    		['name' => 'Jahid Hasan Polash',
    		'email' => 'polash@gmail.com',
    		'reg_no'=>'2012331033',
    		'password' => bcrypt('1')
    		],
    		['name' => 'Abu Hanife Nayem',
    		'email' => 'ahnayem.sust@gmail.com',
    		'reg_no'=>'2012331073',
    		'password' => bcrypt('1')
    		]
    	];
    	
    	foreach ($users as $user) {
    		User::create($user);
    	}

    	
    }
}
