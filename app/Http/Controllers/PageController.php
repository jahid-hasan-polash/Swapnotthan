<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurMission;
use App\News;
use App\Slider;
use App\Gallery;
use App\Sector;
use App\Image;
use App\SectorImage;
use App\NewsImage;
use App\Committee;
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
        $sectors = Sector::all();
        // Slider::all();
        $slider1 = Slider::find(1);
        $slider2 = Slider::find(2);
        $slider3 = Slider::find(3);
        $slider4 = Slider::find(4);
        $gallery = Gallery::all();//Gallary::take(12)->get();

        return view('user.index')
                    ->with('mission',$mission)
                    ->with('slider1',$slider1)
                    ->with('slider2',$slider2)
                    ->with('slider3',$slider3)
                    ->with('slider4',$slider4)
                    ->with('newses',$newses)
                    ->with('gallery',$gallery)
                    ->with('sectors',$sectors);
    }

    //These are functions for routes
    public function whatWeDo(){
        
        $sectors = Sector::all();
        $gallery = Gallery::all();

        return view('user.whatWeDo')
                    ->with('gallery',$gallery)
                    ->with('sectors',$sectors);
    }

    public function contact(){

        $gallery = Gallery::all();
        return view('user.contact')
                    ->with('gallery',$gallery);
    }

    public function executive(){

        $committeeMembers = Committee::orderBy('created_at','desc')->first()->committeeMembers;
        // return $committeeMembers;
        $gallery = Gallery::all();
        return view('user.members')
                    ->with('members',$committeeMembers)
                    ->with('gallery',$gallery);
    }


    public function showMission(){

        $mission = OurMission::orderBy('created_at','desc')->first();
        $gallery = Gallery::all();
        return view('user.showMission')
                    ->with('gallery',$gallery)
                    ->with('mission',$mission);
    }

    public function showSectorDetails($id){

        $sector = Sector::find($id);
        $gallery = Gallery::all();
        return view('user.sector')
                    ->with('gallery',$gallery)
                    ->with('sector',$sector);
    }

    public function showNewsDetails($id){
        $newses = News::orderBy('created_at','desc')->take(5)->get();
        $news = News::find($id);
        $image = Image::find(NewsImage::where('news_id',$id)->first()->image_id);
        $gallery = Gallery::all();

        return view('user.news')
                    ->with('news',$news)
                    ->with('newsAll',$newses)
                    ->with('gallery',$gallery)
                    ->with('image',$image);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDonatePage()
    {
        $gallery = Gallery::all();
        return view('user.donate')->with('gallery',$gallery);
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
