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
    		'email' => 'admin@mail.com',
    		'reg_no'=>'2012331033',
    		'password' => bcrypt('1')
    		],
    		['name' => 'Abu Hanife Nayem',
    		'email' => 'ahnayem.sust@gmail.com',
    		'reg_no'=>'2012331073',
    		'password' => bcrypt('1')
    		],
            ['name' => 'Mahdin Al Nafi',
            'email' => 'mahdin.himu@gmail.com',
            'reg_no'=>'2014731028',
            'password' => bcrypt('abc123')
            ],
            ['name' => 'Rizwanur Rahman Polash',
            'email' => 'rizwanpolash@gmail.com',
            'reg_no'=>'2014231080',
            'password' => bcrypt('abc123')
            ],
            ['name' => 'Al Faysal Anik',
            'email' => 'alfaysalanik55@gmail.com',
            'reg_no'=>'2013133059',
            'password' => bcrypt('abc123')
            ],
            ['name' => 'MD Anwer Hossain Anik',
            'email' => 'anwer15@student.sust.edu',
            'reg_no'=>'2015331015',
            'password' => bcrypt('abc123')
            ],
            ['name' => 'Mahedi Hasan Kabir',
            'email' => 'mahedikabir1@gmail.com',
            'reg_no'=>'2013731034',
            'password' => bcrypt('abc123')
            ],
            ['name' => 'Ataur Rahman',
            'email' => 'ataur.bba16@gmail.com',
            'reg_no'=>'2013731035',
            'password' => bcrypt('abc123')
            ],
            ['name' => 'Bithee Devi',
            'email' => 'bithee94@gmail.com',
            'reg_no'=>'2013731084',
            'password' => bcrypt('abc123')
            ]
    	];
    	
    	foreach ($users as $user) {
    		User::create($user);
    	}

    	
    }
}
