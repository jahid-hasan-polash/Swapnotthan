<?php

use App\UserDetail;
use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userDetails = [
    		['user_id'=>1,
    		'mothers_name'=>'Shaheda Akter',
    		'fathers_name'=>'Askar Ali',
    		'present_address'=>'Akhaia,Sylhet',
    		'mobile_number'=>'+8801682470258',
    		'department_id'=> 12,
    		'bl_donate_capable'=>1,
    		'bl_group_id'=>2,
    		'ex_curr_activities'=>'Singing',
    		'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
    		'sector_to_work_in'=>'Organising, Education'
    		],
    		['user_id'=>2,
    		'mothers_name'=>'Jahanara Akter Nasima',
    		'fathers_name'=>'Abdul Hai',
    		'present_address'=>'Akhaia,Sylhet',
    		'mobile_number'=>'+8801920386820',
    		'department_id'=> 12,
    		'bl_donate_capable'=>1,
    		'bl_group_id'=>3,
    		'ex_curr_activities'=>'Fighting',
    		'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
    		'sector_to_work_in'=>'Organising, Education'
    		]
    	];

    	foreach ($userDetails as $userDetail) {
    		UserDetail::create($userDetail);
    	}

    }
}
