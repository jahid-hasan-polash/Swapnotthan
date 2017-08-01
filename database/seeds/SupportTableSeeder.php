<?php

use Illuminate\Database\Seeder;
use App\BloodGroup;
use App\Department;
use App\Committee;
use App\CommitteeMember;
use App\Designation;

class SupportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blGroups = [
	        ['name'=>'A+'],
	        ['name'=>'B+'],
	        ['name'=>'O+'],
	        ['name'=>'AB+'],
	        ['name'=>'A-'],
	        ['name'=>'B-'],
	        ['name'=>'O-'],
	        ['name'=>'AB-'],
	        ['name'=>'Dont know']
	        ];

	    $departments = [
	    	['name'=>'CHE'], // 
	        ['name'=>'GEE'],
	        ['name'=>'MAT'],
	        ['name'=>'PHY'],
	        ['name'=>'STA'],
	        ['name'=>'BMB'],
	        ['name'=>'GEB'],
	        ['name'=>'FES'],
	        ['name'=>'ARC'],
	        ['name'=>'CEP'],
	        ['name'=>'CEE'],
	        ['name'=>'CSE'],
	        ['name'=>'EEE'],
	        ['name'=>'IPE'],
	        ['name'=>'PME'],
	        ['name'=>'MEE'],
	        ['name'=>'SWE'],
	        ['name'=>'ANP'],
	        ['name'=>'BNG'],
	        ['name'=>'ECO'],
	        ['name'=>'ENG'],
	        ['name'=>'PSS'],
	        ['name'=>'PAD'],
	        ['name'=>'SWC'],
	        ['name'=>'SOC'],
	        ['name'=>'BAN'],
	        ['name'=>'OCN']
	    	];

	   	$committees = [
	   		['fiscal'=>2012],
	   		['fiscal'=>2013],
	   		['fiscal'=>2014],
	   		['fiscal'=>2015],
	   		['fiscal'=>2016],
	   		['fiscal'=>2017]
	   		];

	   	$comitteeMembers = [
	   		['committee_id'		=>6,
	   		 'designation_id'	=>1,
	   		 'user_id'			=>5
	   		],
	   		['committee_id'		=>6,
	   		 'designation_id'	=>3,
	   		 'user_id'			=>7
	   		],
	   		['committee_id'		=>6,
	   		 'designation_id'	=>2,
	   		 'user_id'			=>8
	   		],
	   		['committee_id'		=>6,
	   		 'designation_id'	=>4,
	   		 'user_id'			=>9
	   		],
	   		['committee_id'		=>6,
	   		 'designation_id'	=>5,
	   		 'user_id'			=>3
	   		],
	   		['committee_id'		=>6,
	   		 'designation_id'	=>6,
	   		 'user_id'			=>4
	   		],
	   		['committee_id'		=>6,
	   		 'designation_id'	=>7,
	   		 'user_id'			=>6
	   		]
	   	];

	   	$designations = [
	   		['title'=>'President'],
	   		['title'=>'Vice-President'],
	   		['title'=>'General Secretary'],
	   		['title'=>'Chief Co-ordinator'],
	   		['title'=>'Treasurer'],
	   		['title'=>'Organising Secretary'],
	   		['title'=>'IT Secretary'],
	   		['title'=>'Blood Donation Secretary']
	   		];

	    //seed blood groups
	  	foreach ($blGroups as $blGroup) {
	  		BloodGroup::create($blGroup);	
	  	}

	  	//seed departmetns
	  	foreach ($departments as $department) {
	  		Department::create($department);
	  	}

	  	//seed Committees
	  	foreach ($committees as $committee) {
	  		Committee::create($committee);
	  	}

	  	//seed designations
	  	foreach ($designations as $designation) {
	  		Designation::create($designation);
	  	}

	  	//seed committee_members
	  	foreach ($comitteeMembers as $comitteeMember) {
	  		CommitteeMember::create($comitteeMember);
	  	}


    }
}
