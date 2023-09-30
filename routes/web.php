<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowProfile;
use App\Models\Address;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory as FactoriesFactory;
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
    // return view('pages.index');
    
    //for factory insert
    // $users = User::factory()->count(30)->create();
    // $address = Address::factory()->count(30)->create();
    // $post = Post::factory()->count(30)->create();
    // $image = Image::factory()->count(30)->create();

    // $user = User::find(62);
    // dd($user->address);

    // $address = Address::find(2);
    // dd($address->user);
    
    // $post = Post::find(60);
    // dd($post->images);

    // $image = Image::find(1);
    // dd($image->post->title);

    // $posts = Post::has('images')->get();
    // dd($posts);

    // $user = User::find(1);
    // dd($user->info);

    // $country = Country::find(1);
    // dd($country->posts);

    $user = User::find(4);
    dd($user->posts);
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