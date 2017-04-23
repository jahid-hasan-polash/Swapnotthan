<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\OurMission;
use Input;
use App\Gallery;
use File;
use App\Slider;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    /*For news section*/
    public function newsShow()
    {
        
        $data=News::all();
        return view('news.allnews')->with('data',$data);
    }
    public function createNews()
    {
        
        $data=[
                    
                'title'=>Input::get('newsTitle'),
                'description'=>Input::get('newsDescription'),
                    ];
         
               $response=News::create($data);
               if($response){
                   $data=News::all();
                   return redirect('news')->with('data',$data);
               }
    }

    public function editNews($id)
        {
            $data=News::find($id);
            return view('news.editNews')->with('data',$data);
        }
    public function updateNews($id)
        {
           $data=[
                       
                   'title'=>Input::get('newsTitle'),
                   'description'=>Input::get('newsDescription'),
                       ];
            
                  $response=News::find($id)->update($data);
                  if($response){
                      $data=News::all();
                      return redirect('news')->with('data',$data);
                  }
        }

    public function destroyNews($id)
        {
            $response=News::find($id)->delete();
            if($response){
                return redirect('news');
            }
        }
    /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

    /*For mission section*/

    public function editMission($id)
        {
            $data=OurMission::find($id);
            return view('mission.editMission')->with('data',$data);
        }
    public function updateMission($id)
        {
           $data=[
                   'description'=>Input::get('missionDescription'),
                       ];
            
                  $response=OurMission::find($id)->update($data);
                  if($response){
                      $data=OurMission::all();
                      return redirect('dashboard');
                  }
        }

    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

    //Slider images section

    public function sliderImages()
        {
            $data=Slider::all();
            return view('slider.changeSlider')->with('data',$data);

        }

    public function uploadImage($id)
        {
            $data=Slider::find($id);
            return view('slider.uploadImage')->with('data',$data);

        }

    public function storeImage(Request $request)
        {

            //validation

            $this->validate($request, [
                'imageTitle' => 'required',
                'image' => 'required'
            ]);

            $id=$request->input('id');

            //Deleting the old image

            $data=Slider::find($id);
            File::delete('img/slider/'.$data->image_link);

            //adding new image

            $image = $data;

            $image->image_title = $request->imageTitle;

            if($request->hasFile('image')) {
                $file = Input::file('image');
                
                $name = 'Image_' .$file->getClientOriginalName();
                
                $image->image_link = $name;

                $file->move(public_path().'/img/slider/', $name);
            }

            $image->save();

            return view('dashboard');

        }

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        //Gallery controllers

        public function updateGallery(){
            $data=Gallery::all();
            return view('gallery.galleryAdmin')->with('data',$data);
        }

        public function uploadGalleryImage($id){
            $data=Gallery::find($id);
            return view('gallery.uploadGalleryImage')->with('data',$data);
        }

        public function storeGalleryImage(Request $request)
            {

                //validation

                $this->validate($request, [
                    'imageTitle' => 'required',
                    'image' => 'required'
                ]);

                $id=$request->input('id');

                //Deleting the old image

                $data=Gallery::find($id);
                File::delete('img/gallery/'.$data->image_link);

                //adding new image

                $image = $data;

                $image->image_title = $request->imageTitle;

                if($request->hasFile('image')) {
                    $file = Input::file('image');
                    
                    $name = 'Image_' .$file->getClientOriginalName();
                    
                    $image->image_link = $name;

                    $file->move(public_path().'/img/gallery/', $name);
                }

                $image->save();

                return view('dashboard');

            }

}
