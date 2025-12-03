<?php

namespace App\Http\Controllers;

use App\Models\TestPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class TestPageController extends Controller
{
    public function test(){
        return view('pages.test.create_test');
    }

    public function store(Request $request){
           $this->validate($request,[
        'title'=>'required|string',
        'sub_title'=>'required|string',
        
       ]);


       $test= new TestPage();

        $test->title=$request->title;
        $test->sub_title=$request->sub_title;

         
          $own_file = $request->file('own_image');
         Storage::putFile('public/img/', $own_file);
         $test->own_image = "storage/img/".$own_file->hashName();
         
        
      
        
         $test->save();
        
        return redirect()->route('test.page')->with('success'," online page data hass been update successfuly");

    }

    public function list(){
        $test=TestPage::first();
        return view('pages.test.list_test',compact('test'));
    }

    public function edit($id){
        $test=TestPage::find($id);
        return view('pages.test.edit_test',compact('test'));
    }

    public function update(Request $request,$id){
         $this->validate($request,[
        'title'=>'required|string',
        'sub_title'=>'required|string',
        
       ]);


       $test= TestPage::find($id);

        $test->title=$request->title;
        $test->sub_title=$request->sub_title;

         if($request->file('own_image')){
        $own_file = $request->file('own_image');
         Storage::putFile('public/img/', $own_file);
         $test->own_image = "storage/img/".$own_file->hashName();
         

         }
         
        
      
        
         $test->save();
        
        return redirect()->route('list.page.test')->with('success'," test page data hass been update successfuly");

    }

    public function delete(){
        $test=TestPage::first();
        $test->delete();

        return redirect()->route('list.page.test')->with('success', " test page iteam delete hass been delte sucessfully");
    }
}
