<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\User;
use App\UserDetail;
use App\UserRole;
use App\UserDetails;
use App\Department;
use App\BloodGroup;
use App\RoleUser;
use Validator;
use Auth;
use Hash;
use App\Gallery;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depts = Department::lists('name','id');
        $bloodGroups = BloodGroup::lists('name','id');
        $boolean = [
        '1' => 'Yes',
        '2' => 'No',
        ];

        $gallery = Gallery::all();

        return view('user.register')
                ->with('depts', $depts)
                ->with('bloodGroups', $bloodGroups)
                ->with('gallery',$gallery)
                ->with('capability', $boolean);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'firstName'                  => 'required',
            'lastName'                  => 'required',
            'mother'                => 'required',
            'father'                => 'required',
            'present_address'       => 'required',
            'mobile_number'         => 'required',
            'reg_no'                => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required'

        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = new User;
            $user->name = $data['firstName'].' '.$data['lastName'];
            $user->reg_no = $data['reg_no'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);

            if($user->save()){

                $detail = new UserDetail;
                $detail->user_id = $user->id;
                $detail->mothers_name = $data['mother'];
                $detail->fathers_name = $data['father'];
                $detail->present_address = $data['present_address'];
                $detail->mobile_number = $data['mobile_number'];
                $detail->department_id = $data['dept'];
                $detail->bl_donate_capable = $data['bl_donate_capable'];
                $detail->bl_group_id = $data['bl_group'];
                $detail->ex_curr_activities = $data['ex_curr_activities'];
                $detail->why_to_be_swapnotthanian = $data['why_to_be_swapnotthanian'];
                $detail->sector_to_work_in = $data['sector_to_work_in'];
                $detail->save();
                
                //role of the new user set
                $userRole = new RoleUser;
                $userRole->user_id = $user->id;
                $userRole->role_id = 2;
                $userRole->save();

                Auth::logout();
                return redirect()->route('login')
                            ->with('success','Registered successfully. Sign In Now.');
            }else{
                return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }

    /**
     * Display the profile Info.
     *
     * @param  none
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('auth.profile')
                    ->with('title', 'Profile')
                    ->with('user',$user);
    }

    public function dashboard()
    {
        $user = Auth::user();
        $gallery = Gallery::all();
        return view('user.dashboard')
                    ->with('gallery',$gallery)
                    ->with('user',$user);
    }    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit()
    {
        $user = Auth::user();
        $depts = Department::lists('name','id');
        $bloodGroups = BloodGroup::lists('name','id');
        $boolean = [
        '1' => 'Yes',
        '2' => 'No',
        ];

        $gallery = Gallery::all();

        return view('user.editProfile')
                ->with('user',$user)
                ->with('depts', $depts)
                ->with('bloodGroups', $bloodGroups)
                ->with('gallery',$gallery)
                ->with('capability', $boolean);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules =[
            'mother'                => 'required',
            'father'                => 'required',
            'present_address'       => 'required',
            'mobile_number'         => 'required',
            'reg_no'                => 'required',
            'email'                 => 'required',
            'password'              => 'required'

        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = Auth::user();
            $user->name = $data['name'];
            $user->reg_no = $data['reg_no'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);

            if($user->save()){

                $detail = new UserDetail;
                $detail->user_id = $user->id;
                $detail->mothers_name = $data['mother'];
                $detail->fathers_name = $data['father'];
                $detail->present_address = $data['present_address'];
                $detail->mobile_number = $data['mobile_number'];
                $detail->department_id = $data['dept'];
                $detail->bl_donate_capable = $data['bl_donate_capable'];
                $detail->bl_group_id = $data['bl_group'];
                $detail->ex_curr_activities = $data['ex_curr_activities'];
                $detail->why_to_be_swapnotthanian = $data['why_to_be_swapnotthanian'];
                $detail->sector_to_work_in = $data['sector_to_work_in'];
                $detail->save();
                
                // //role of the new user set
                // $userRole = new RoleUser;
                // $userRole->user_id = $user->id;
                // $userRole->role_id = 2;
                // $userRole->save();

                // Auth::logout();
                return redirect()->route('user.dashboard')
                            ->with('success','Profile Edited successfully.');
            }else{
                return redirect()->route('user.dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
