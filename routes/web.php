<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\OnlinePageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index/page',[PagesController::class,'index'])->name('index.page');
Route::get('dashboard/page',[MainPageController::class, 'dashboard'])->name('dashboard.page');
Route::get('dashboard/main/page',[PagesController::class, 'main'])->name('dashboard.main.page');



// main route start 
Route::get('main/page',[MainPageController::class,'hero'])->name('main.page');
Route::put('store/main',[MainPageController::class, 'store'])->name('store.main');
Route::get('list/page',[MainPageController::class, 'list'])->name('list.page');
Route::get('edit/page/{id}',[MainPageController::class, 'edit'])->name('edit.page');
Route::put('update/page/{id}',[MainPageController::class, 'update'])->name('update.page');
Route::delete('delete/page/{id}',[MainPageController::class, 'delete'])->name('delete.page');
// main route end

// online page start

Route::get('online/page',[OnlinePageController::class,'create'])->name('online.page');
Route::put('store/online/page',[OnlinePageController::class, 'store'])->name('store.online.page');
Route::get('list/page/online',[OnlinePageController::class,'list'])->name('list.page.online');
Route::get('edit/page/online/{id}',[OnlinePageController::class, 'edit'])->name('edit.page.online');
Route::put('update/onlie/page/{id}',[OnlinePageController::class, 'update'])->name('update.online.page');
Route::delete('delete/online/page/{id}',[OnlinePageController::class, 'delete'])->name('delete.online.page');
// online page end

// Test page start
Route::get('test/page',[TestPageController::class,'test'])->name('test.page');
Route::put('store/test/page',[TestPageController::class, 'store'])->name('store.test.page');
Route::get('list/page/test',[TestPageController::class, 'list'])->name('list.page.test');
Route::get('edit/test/page/{id}',[TestPageController::class, 'edit'])->name('edit.test.page');
Route::put('update/page/test/{id}',[TestPageController::class, 'update'])->name('update.page.test');
Route::delete('delete/page/test/{id}',[TestPageController::class, 'delete'])->name('delete.page.test');
// Test page end