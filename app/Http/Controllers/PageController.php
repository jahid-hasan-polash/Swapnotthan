<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurMission;
use App\News;
use App\Slider;
use App\Gallery;
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
        $slider1 = Slider::find(1);
        $slider2 = Slider::find(2);
        $slider3 = Slider::find(3);
        $slider4 = Slider::find(4);
        $gallery = Gallery::all();
        return view('user.index')
                    ->with('mission',$mission)
                    ->with('slider1',$slider1)
                    ->with('slider2',$slider2)
                    ->with('slider3',$slider3)
                    ->with('slider4',$slider4)
                    ->with('newses',$newses)
                    ->with('gallery',$gallery);
    }

    //These are functions for routes
    public function whatWeDo(){
        
        $gallery = Gallery::all();

        return view('user.whatWeDo')->with('gallery',$gallery);
    }

    public function contact(){

        $gallery = Gallery::all();
        return view('user.contact')->with('gallery',$gallery);
    }

    public function members(){

        $gallery = Gallery::all();
        return view('user.membersDemo')->with('gallery',$gallery);
    }

    public function executive(){

        $gallery = Gallery::all();
        return view('user.membersDemo')->with('gallery',$gallery);
    }


    public function showMission(){

        $gallery = Gallery::all();
        return view('user.showMission')->with('gallery',$gallery);
    }

    public function showSectorDetails(){

        $gallery = Gallery::all();
        return view('user.sector')->with('gallery',$gallery);
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
