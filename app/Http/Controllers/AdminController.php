<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\OurMission;
use Input;
use App\Gallery;
use App\RoleUser;
use File;
use App\Slider;
use App\Designation;
use App\Committee;
use App\CommitteeMember;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function showMembers(){
        $members = User::all();
        return view('members.show')
                    ->with('members',$members)
                    ->with('title','members');
    }

    public function editMember($id){
        $designations = Designation::lists('title','id');
        $committees = Committee::lists('fiscal','id');
        $member = User::find($id);
        return view('members.edit')
                    ->with('member',$member)
                    ->with('designations',$designations)
                    ->with('committees',$committees)
                    ->with('title','Edit member');
    }


    //basically adds a new row in the committee member table
    public function doEditMember($id, Request $request){
        $committeeMember = new CommitteeMember;
        $data = $request->all();
        $user = User::find($id);
        //return $user;
        $committeeMember->committee_id = $data['committee_id'];
        $committeeMember->designation_id = $data['designation'];
        $committeeMember->user_id = $user->id;
        if($committeeMember->save()){
            $members = User::all();
            return view('members.show')
                    ->with('members',$members)
                    ->with('title','members')
                    ->with('success','Updated successfully.');
        } else {
            return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
        }

    }
    
//faulty function
    public function makeAdmin($id){

        $user = RoleUser::where('user_id',$id)->first();
        $user->role_id = 1;
        if($user->save()){
            return redirect('dashboard')->with('success','You Have made an admin successfully.');
        } else {
            return redirect('dashboard')->with('error','Something went wrong!!');
        }
        
    }

    /*For news section*/
    public function newsShow()
    {
        
        $data=News::orderBy('created_at','desc')->get();
        return view('news.allnews')
                    ->with('data',$data)
                    ->with('title','News');
    }
    public function createNews()
    {
        
        $data=[
                    
                'title' => Input::get('newsTitle'),
                'description' => Input::get('newsDescription'),
                    ];
         
               $response = News::create($data);
               if($response){
                   $data = News::orderBy('created_at','desc')->get();
                   return redirect('news')
                                ->with('data',$data)
                                ->with('title','News');
               }
    }

    public function editNews($id)
        {
            $data=News::find($id);
            return view('news.editNews')
                    ->with('data',$data)
                    ->with('title','News');
        }

    public function updateNews($id)
        {
           $data=[
                       
                   'title'=>Input::get('newsTitle'),
                   'description'=>Input::get('newsDescription'),
                       ];
            
                  $response=News::find($id)->update($data);
                  if($response){
                      $data=News::orderBy('created_at','desc')->get();
                      return redirect('news')
                            ->with('data',$data)
                            ->with('title','News');
                  }
        }

    public function destroyNews($id)
        {
            $response = News::find($id)->delete();
            if($response){
                return redirect('news')->with('title','News');
            }
        }
    /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

    /*For mission section*/

    public function editMission($id)
        {
            $data=OurMission::find($id);
            return view('mission.editMission')
                        ->with('data',$data)
                        ->with('title','Mission');
        }
    public function updateMission($id)
        {
           $data=[
                   'description'=>Input::get('missionDescription'),
                       ];
            
                  $response=OurMission::find($id)->update($data);
                  if($response){
                      $data=OurMission::all();
                      return redirect('dashboard')
                                ->with('title','Dashboard');
                  }
        }

    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

    //Slider images section

    public function sliderImages()
        {
            $data=Slider::all();
            return view('slider.changeSlider')
                        ->with('data',$data)
                        ->with('title','Slider');

        }

    public function uploadImage($id)
        {
            $data=Slider::find($id);
            return view('slider.uploadImage')
                        ->with('data',$data)
                        ->with('title','Slider');

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

            return view('dashboard')
                        ->with('title','Dashboard');

        }

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        //Gallery controllers

        public function updateGallery(){
            $data=Gallery::all();
            return view('gallery.galleryAdmin')
                            ->with('data',$data)
                            ->with('title','Gallery');
        }

        public function uploadGalleryImage($id){
            $data=Gallery::find($id);
            return view('gallery.uploadGalleryImage')
                            ->with('data',$data)
                            ->with('title','Gallery');
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

                return view('dashboard')
                            ->with('title','Dashboard');

            }

}
