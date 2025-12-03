<?php

namespace App\Http\Controllers;

use App\Models\OnlinePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OnlinePageController extends Controller
{
    public function create(){
        return view('pages.online.online_create');
    }

    public function store(Request $request){
            $this->validate($request,[
        'title'=>'required|string',
        'sub_title'=>'required|string',
        
       ]);


       $online= new OnlinePage();

        $online->title=$request->title;
        $online->sub_title=$request->sub_title;

         
         $online_file = $request->file('online_image');
         Storage::putFile('public/img/', $online_file);
         $online->online_image = "storage/img/".$online_file->hashName();
         
        
         $online->save();
        
        return redirect()->route('online.page')->with('success'," online page data hass been upload successfuly");
    }

    public function list(){
        $online=OnlinePage::all();
        return view('pages.online.list_online',compact('online'));
    }

    public function edit($id){
        $online=OnlinePage::find($id);
        return view('pages.online.edit_online',compact('online'));
    }
    public function update(Request $request,$id){
         $this->validate($request,[
        'title'=>'required|string',
        'sub_title'=>'required|string',
        
       ]);


       $online=  OnlinePage::find($id);

        $online->title=$request->title;
        $online->sub_title=$request->sub_title;

         if($request->file('online_image')){
          $online_file = $request->file('online_image');
         Storage::putFile('public/img/', $online_file);
         $online->online_image = "storage/img/".$online_file->hashName();
         
        }
      
        
         $online->save();
        
        return redirect()->route('list.page.online')->with('success'," online page data hass been update successfuly");
    }

    public function delete($id){
        $online=OnlinePage::find($id);
        $online->delete();

        return redirect()->route('list.page.online')->with('success', " list page data delete hass been successfuly");
    }
}
