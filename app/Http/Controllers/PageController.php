<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission = OurMission::first();
        $newses = News::orderBy('created_at','desc')->take(5)->get();
        return view('user.index')
                    ->with('mission',$mission)
                    ->with('newses',$newses);
    }

    //These are functions for routes
    public function whatWeDo(){
        return view('user.whatWeDo');
    }

    public function contact(){
        return view('user.contact');
    }

    public function members(){
        return view('user.membersDemo');
    }

    public function executive(){
        return view('user.membersDemo');
    }


    public function showMission(){
        return view('user.showMission');
    }

    public function showSectorDetails(){
        return view('user.sector');
    }

    public function showNewsDetails(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
