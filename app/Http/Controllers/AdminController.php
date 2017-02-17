<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\OurMission;
use Input;
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

}
