<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainPageController extends Controller
{
    public function hero(){
        return view('pages.main.main_create');
    }

    public function store(Request $request){
          $this->validate($request,[
        'title1'=>'required|string',
        'title2'=>'required|string',
        'title3'=>'required'
       ]);


       $main= new MainPage();

        $main->title1=$request->title1;
        $main->title2=$request->title2;
        $main->title3=$request->title3;
         $main_file = $request->file('main_image');
          Storage::putFile('public/img/', $main_file);
         $main->main_image = "storage/img/".$main_file->hashName();
        $main->save();
        
        return redirect()->route('main.page')->with('success'," main page data hass been upload successfuly");

    }
     
    public function list(){
        $main=MainPage::first();
        return view('pages.main.list',compact('main'));
    }


    public function edit($id){
         $main=MainPage::find($id);
         return view('pages.main.edit',compact('main'));

    }
       public function dashboard(){
        return view('pages.dashboard');
    }

    public function update(Request $request,$id){
          $this->validate($request,[
        'title1'=>'required|string',
        'title2'=>'required|string',
        'title3'=>'required'
       ]);


       $main= MainPage::find($id);

        $main->title1=$request->title1;
        $main->title2=$request->title2;
        $main->title3=$request->title3;
         if($request->file('main_image')){
         $main_file = $request->file('main_image');
         Storage::putFile('public/img/', $main_file);
         $main->main_image = "storage/img/".$main_file->hashName();
         }
        
         $main->save();
        
        return redirect()->route('list.page')->with('success'," main page data hass been update successfuly");
    }

    public function delete($id){
        $main=MainPage::find($id);
        $main->delete();

        return redirect()->route('list.page')->with('success', "list page iteam delete successfully");
    }

}

