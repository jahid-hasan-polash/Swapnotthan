<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Mail;
use App\Gallery;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {

        $user = $request->all();
        // [
        //     'name'=>Input::get('username'),
        // ];

        //die($user->name);
        //return $user['username'];
        //return view('user.testMail')->with('user',$user);

        Mail::send('user.testMail', ['user' => $user], function ($m){
            $m->from('swapnotthan@website.com', 'Swapnotthan Website');

            //$m->to('swapnotthan@gmail.com','swapnotthan@gmail.com')->subject('Test Mail');
            $m->to('swapnotthan@gmail.com')->subject('Mail From Contact');
        });

        $gallery = Gallery::all();
        return view('user.contact')->with('gallery',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testMail()
    {
        return view('user.testMail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
