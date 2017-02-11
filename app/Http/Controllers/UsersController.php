<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetails;
use App\Department;
use Validator;
use Auth;
use Hash;
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
        return view('auth.register')
                    ->with('title', 'Register');
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
            'firstName' => 'required',
            'mother' => 'required',
            'father' => 'required',
            'present_address' => 'required',
            'mobile_number' => 'required',
            'dept' => 'required',
            'reg_no' => 'required',
            'password' => 'required',
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        } else {
            $user = new User;
            $user->name = $data['firstName'].' '.$data['lastName'];
            $user->reg_no = $data['reg_no'];
            $user->email = $data['email'];
            $user->password = Hash::make($request->password);

            if($user->save()){
                Auth::logout();

                $detail = new UserDetails;
                $detail->user_id = $user->id;
                $detail->mothers_name = $data['mother'];
                $detail->fathers_name = $data['father'];
                $detail->present_address = $data['present_address'];
                $detail->mobile_number = $data['mobile_number'];
                $detail->dept = Department::where('id','=',$data['dept'])->first()->name;
                $detail->bl_donate_capable = $data['bl_donate_capable']; //this is a boolen value
                $detail->bl_group = BlGroup::where('id','=',$data['bl_group'])->first()->title;
                $detail->ex_curr_activities = $data['ex_curr_activities'];
                $detail->why_to_be_swapnotthanian = $data['why_to_be_swapnotthanian'];
                $detail->sector_to_work_in = $data['sector_to_work_in'];
                
                $detail->save();

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
         return view('auth.profile')
                    ->with('title', 'Profile')->with('user', Auth::user());
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
