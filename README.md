if composer not working you have to use:
    brew upgrade
and then:
    eval $(/opt/homebrew/bin/brew shellenv)
////////////////////////////////////////////////////////////////////////////////////////////

show error pages in laravel:
    php artisan vendor:publish --tag=laravel-errors
////////////////////////////////////////////////////////////////////////////////////////////

for start mysql
    mysql.server start 
and then:
     mysql -u root -p 
////////////////////////////////////////////////////////////////////////////////////////////

php artisan  make:model post -a 

   INFO  Model [app/Models/post.php] created successfully.  

   INFO  Factory [database/factories/PostFactory.php] created successfully.  

   INFO  Migration [database/migrations/2023_09_17_103117_create_posts_table.php] created successfully.  

   INFO  Seeder [database/seeders/PostSeeder.php] created successfully.  

   INFO  Request [app/Http/Requests/StorepostRequest.php] created successfully.  

   INFO  Request [app/Http/Requests/UpdatepostRequest.php] created successfully.  

   INFO  Controller [app/Http/Controllers/PostController.php] created successfully.  

   INFO  Policy [app/Policies/PostPolicy.php] created successfully. 
////////////////////////////////////////////////////////////////////////////////////////////9

return view ('welcome')->with('parametr','value');

return viwe('welcome',['parametr','value']);

$var='test';
return view ('welcome',compact('var'));

////////////////////////////////////////////////////////////////////////////////////////////10

show rout all list in terminal:
php artisan rout:list

////////////////////////////////////////////////////////////////////////////////////////////10
resource rout:

Route::resource('post', PostController::class);
Route::apiResource('post',PostController::class);

////////////////////////////////////////////////////////////////////////////////////////////11
conroller for single action
php artisan  make:controller ShowProfile --invokable 
Route::get('user/{id}',ShowProfile::class);

////////////////////////////////////////////////////////////////////////////////////////////12 13
redirect

1-> helper:
Route::get('helper-redirect',function(){
    return redirect()->to('post/create');
});

2-> shortcut:
Route::get('shortcut-redirect',function(){
    return redirect('post/create');
});

3->facade:
Route::get('facade-redirect',function(){
     Redirect::to('post/create');
});

4-> Route:
Route::redirect('route-redirect','post/create');

5-> name:
Route::get('name-redirect',function(){
    return redirect()->route('post.create');
});

6-> send param with name redirect:
Route::get('name-redirect',function(){
    return redirect()->route('post.create',['id'=>1]);
});

////////////////////////////////////////////////////////////////////////////////////////////14
send session with redirect

Route::get('/redirectSession', function () { 
    return redirect('post/create')->with('sessionName','session value');
});

in view->
 <?php echo session('sessionName) ?>
 ////////////////////////////////////////////////////////////////////////////////////////////14
 form action and @csrf

  
 ////////////////////////////////////////////////////////////////////////////////////////////14
redirect to out of project
Route::get('toplearn',function(){
    return redirect()->away('https://toplearn.com');
});
 ////////////////////////////////////////////////////////////////////////////////////////////15 http exeption
   {{abort(403,'this is forbiden for ypo')}} 
   abort(404) not found
   abort(401) UNAUTHORIZED
   {{abort_unless(Auth::user()->isAdmin(),403)}} forbiden
{{abort_unless(!Auth::user()->isAdmin(),403)}} forbiden


show error pages in laravel:
    php artisan vendor:publish --tag=laravel-errors

 ////////////////////////////////////////////////////////////////////////////////////////////16 response
     return response('this is a response',200)->header('content_type','text/plain')->cookie('cookeName','cookeValue',$minuts);


     for dont encrypt coockei:
        app->http->middelwar->EncriptCookeis :

        protected $except = [
            'cookeName',
        ]


     send json for response:
        Route::get('/response-json', function () { 
        $minuts = 5;
        return response()->json(['age'=>20,'status'=>'enable']);
});

 ////////////////////////////////////////////////////////////////////////////////////////////17 sipmle test
 for create test file in tests->unit
    php artisan:test testName --unit
for execute tests:
    ./vendor/bin/phpunit
if want to excute one test
    ./vendor/bin/phpunit --filter testName
 ////////////////////////////////////////////////////////////////////////////////////////////18 blade
 @forelse ($collection as $item)
    
@empty
    
@endforelse
loop in foreach:
$loop->first
$loop->last
$loop->count
$loop->parent
$loop->iteration,......
