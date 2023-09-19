<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowProfile;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/test', function () {
    return view('posts.test');
});


Route::resource('post', PostController::class);
Route::get('user/{id}',ShowProfile::class);

Route::get('helper-redirect',function(){
    return redirect()->to('post/create');
});

Route::get('shortcut-redirect',function(){
    return redirect('post/create');
});

Route::get('facade-redirect',function(){
     Redirect::to('post/create');
});

Route::redirect('route-redirect','post/create');


Route::get('name-redirect',function(){
    return redirect()->route('post.create');
});

Route::get('param-redirect',function(){
    return redirect()->route('post.create',['id'=>1]);
});

Route::get('toplearn',function(){
    return redirect()->away('https://toplearn.com');
});
Route::get('/redirectSession', function () { 
    return redirect('post/create')->with('sessionName','session value');
});

Route::get('/response', function () { 
    $minuts = 5;
    return response('this is a response',200)->header('content_type','text/plain')->cookie('cookeName','cookeValue',$minuts);
});


Route::get('/response-json', function () { 
    $minuts = 5;
    return response()->json(['age'=>20,'status'=>'enable']);
});