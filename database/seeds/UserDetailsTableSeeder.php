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
    		],
            ['user_id'=>3,
            'mothers_name'=>'Salma Akter',
            'fathers_name'=>'Md. Abul Hashem',
            'present_address'=>'Surma Residential Area, Akhaliya, Sylhet.',
            'mobile_number'=>'+8801627066059',
            'department_id'=> 26,
            'bl_donate_capable'=>1,
            'bl_group_id'=>2,
            'ex_curr_activities'=>'Singing',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ],
            ['user_id'=>4,
            'mothers_name'=>'Sultana Parvin',
            'fathers_name'=>'Khalilur Rahman',
            'present_address'=>'Akhaia,Sylhet',
            'mobile_number'=>'+8801770275902',
            'department_id'=> 20,
            'bl_donate_capable'=>1,
            'bl_group_id'=>2,
            'ex_curr_activities'=>'Book Reading',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ],
            ['user_id'=>5,
            'mothers_name'=>'Altafun Nesha',
            'fathers_name'=>'Farukul Islam',
            'present_address'=>'Flat-4/b,Haji sofat ullah tower,surma,akhalia,sylhet',
            'mobile_number'=>'+8801750843486',
            'department_id'=> 3,
            'bl_donate_capable'=>1,
            'bl_group_id'=>2,
            'ex_curr_activities'=>'Book Reading',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ],
            ['user_id'=>6,
            'mothers_name'=>'Jahanara Halim',
            'fathers_name'=>'Abdul Halim',
            'present_address'=>'72/4 lakecity R/A, Neharipara,sylhet',
            'mobile_number'=>'+8801965409847',
            'department_id'=> 12,
            'bl_donate_capable'=>1,
            'bl_group_id'=>1,
            'ex_curr_activities'=>'Book Reading',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ],
            ['user_id'=>7,
            'mothers_name'=>'Tahera Sultana',
            'fathers_name'=>'Ansar Ali',
            'present_address'=>'3021, Bangabondhu Hall, SUST',
            'mobile_number'=>'+8801738630814',
            'department_id'=> 26,
            'bl_donate_capable'=>1,
            'bl_group_id'=>3,
            'ex_curr_activities'=>'Book Reading',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ],
            ['user_id'=>8,
            'mothers_name'=>'Moyna Begum',
            'fathers_name'=>'Samsir Uddin',
            'present_address'=>'5006, Bangabondhu Hall, SUST',
            'mobile_number'=>'+880173065830',
            'department_id'=> 26,
            'bl_donate_capable'=>1,
            'bl_group_id'=>1,
            'ex_curr_activities'=>'Book Reading',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ],
            ['user_id'=>9,
            'mothers_name'=>'Nolini Devi',
            'fathers_name'=>'Late Biraj Singha',
            'present_address'=>'Agrani 8, Londoni road, Sylhet',
            'mobile_number'=>'+8801681977579',
            'department_id'=> 26,
            'bl_donate_capable'=>1,
            'bl_group_id'=>1,
            'ex_curr_activities'=>'Book Reading',
            'why_to_be_swapnotthanian'=>'Swapnotthan is a true voluntary organisation with proper dedication.',
            'sector_to_work_in'=>'Organising, Education'
            ]
    	];

    	foreach ($userDetails as $userDetail) {
    		UserDetail::create($userDetail);
    	}

    }
}
