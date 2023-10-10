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
 ////////////////////////////////////////////////////////////////////////////////////////////35 36 factory
 php artisan make:factory AddressFactory

  return [
            'city' => fake()->city(),
            'address' => fake()->address(),
            'postal_code' => Str::random(10),
            'user_id' => function(){
                return  User::factory()->create()->id;
            },
        ];

config->app->search "faker"->'faker_locale' => 'fa_IR',


for execute:
     $users = User::factory()->count(30)->create();
     $address = Address::factory()->count(30)->create();

//////////////////////////////////////////////////////////////////////////////////61 one to one relationship

user->address
    1

in address migration:
    $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

in address model:
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

in user model:
    public function address(){
        return $this->hasOne('App\Models\Address');
    }

in controller:
    $user = User::find(62);
    dd($user->address);

    $address = Address::find(2);
    dd($address->user);


//////////////////////////////////////////////////////////////////////////////////62 one to many relationship
post->images
    ∞

in images migration:
    $table->foreignId('post_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

in image model:
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }

in post model:
    public function images(){
        return $this->hasMany('App\Models\Image');
    }

in controller:
    $post = Post::find(60);
    dd($post->images);

    $image = Image::find(1);
    dd($image->post->title);

show only post with images:
    $posts = Post::has('images')->get();

assocate for insert post_id value in image table if null
dessocate for null post_id value in image table 


/////////////////////////////////////////////////////////////////////////////63 has one through relationship
user->car->carInformation
     1    1    


in car mifration:
    $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

in CarInfo migration:
    $table->foreignId('car_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

in user model:
    public function info(){
        return $this->hasOneThrough('App\Models\CarInfo','App\Models\Car');
    }

in conroller:
    $user = User::find(1);
    dd($user->info);

/////////////////////////////////////////////////////////////////////////////64 has many through relationship
contry->province->city
       ∞      ∞

in contry Model:
    public function cities(): HasManyThrough
    {
        return $this->hasManyThrough(City::class, Province::class);
    }

in province model:
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

in city model:
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
in controller:
    //country->cities
    // $country = Country::find(103);
    // dd($country->cities->name);

    //city->province
    // $citey = City::find(1);
    // dd($citey->province);

    //province->cities
    // $province = Province::find(1);
    // dd($province->cities);

    //province->country
    // $province = Province::find(1);
    // dd($province->country);

    // city->country
    // $citey = City::find(1);
    // dd($citey->province->country);


/////////////////////////////////////////////////////////////////////////////65 many to many relationship with pivot table
tag<->product
    ∞

we need a pivot table with 3 filed: tag_id product_id timestamps

in tag model:
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }

in product_model:
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

in product tag model for change table name:
    protected $table = 'product_tag';

in controller:
    $tags = Tag::find(1);
    dd($tags->products);

    $product = Product::find(1);
    dd($product->tags);

/////////////////////////////////////////////////////////////////////////////66 many to many relationship 
attach detach withpivot pivot sync method


use tag relation and give to product tag 1
    $product = Product::find(1);
    $product->tags()->attach([1,2]);
    dd($product->tags);

remove tag from post
    $product = Product::find(1);
    $product->tags()->detach([4]);
    dd($product->tags);

remove all last tag and give tag number 4 to product
    $product = Product::find(1);
    $product->tags()->detach([4]);
    dd($product->tags);


if yoyr pivot table has a other filed like "value" we need to know to  poroduct and tag model:
   return $this->belongsToMany('App\Models\Tag')->withPivot('value');
now in controller for aaccess "value" :
    $product = Product::find(1);
    dd( $product->tags()->first()->pivot->value);



/////////////////////////////////////////////////////////////////////////////67 polymorphyce one to one
post->video
     1
product->video
       1
car->video
    1

in video migration:
    $table->id();
    $table->string('url');
    $table->integer('videoable_id');
    $table->string('videoable_type');
    $table->timestamps();


in video model:
    public function videoable(){
        return $this->morphTo();
    }

in post and product model:
    public function video(){
        return $this->morphOne('App\Models\Video','videoable');
    }

in controller:
    $product = Product::find(1);
    dd( $product->video);

    $post = Post::find(1);
    dd( $post->video);

    $video = Video::find(1);
    dd( $video->videoable);

/////////////////////////////////////////////////////////////////////////////68 polymorphyce one to many
post->news
    ∞
product->news
       ∞


in news migration:
    $table->id();
    $table->string('content');
    $table->integer('newsable_id');
    $table->string('newsable_type');
    $table->timestamps();


in news model:
    public function newsable(){
        return $this->morphTo();
    }

in post and product model:
    public function news(){
        return $this->morphMany('App\Models\News','newsable');
    }

in controller:
    $product = Product::find(1);
    dd( $product->news);

    $post = Post::find(1);
    dd( $post->news);

    $news = News::find(1);
    dd( $news->newsable);

    insert news for post 1:
        $post = Post::find(1);
        $news = new News;
        $news->content="news number 2";
        $post->news()->save($news);
        dd( $post->news);


/////////////////////////////////////////////////////////////////////////////69 polymorphyce many to many
post<->category
     ∞
product<->category
       ∞

we need 4 tables: post product categories categoryables

in category migration:
    $table->id();
    $table->string('name');
    $table->timestamps();

in categoryables:
    $table->integer('category_id');
    $table->integer('categoryable_id');
    $table->string('categoryable_type');
    $table->timestamps();


in post and product model:
    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
in category model:
    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }
 
    public function products(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }

