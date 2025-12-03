<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use App\Models\OnlinePage;
use App\Models\TestPage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main=MainPage::first();
        $online=OnlinePage::all();
        $test=TestPage::first();
        return view('pages.index',compact('main','online','test'));
    }

 

    public function main(){
        return view('pages.dashboard_main');
    }
}
