<?php
// use App\Post;
// use App\User;
// use App\Country;
use App\User;
use App\Address;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/insert',function(){
//     $user=User::findOrFail(1);
//     $address = new Adress(['name'=>'hoge 1234']);
//     $user->address()->save($address);
// });

// Route::get('/update',function(){
//     $address = Address::whereUserId(1)->first();
//     $address->name = "Update Name";
//     $address->save();
// });

// Route::get('/read',function(){
//     $user = User::findOrFail(1);
// });

// Route::get('/delete',function(){
//     $user = User::findOrFail(1);
//     $address = address()->delete();
// });

// Route::get('/hoge/posts',function(){
//     return 'hoge';
// });
// Route::get('/post','PostsController@index');

// Route::resource('post', 'PostsController');

// Route::get('/contact', 'PostsController@contact');

// Route::get('/insert',function(){
//     DB::insert('insert into posts(title, content) values(?,?)',['php with laravel','php is best']);

// });

// Route::get('read', function(){
//     $result = DB::select('select * from posts where id = ?',[1]);
//     return $result;
//     // foreach($result as $post){
//     //     return $post -> title;
//     // }
// });

// Route::get('/update', function(){
//     $update = DB::update('update posts set title = "Update title" where id = ?',[1]);
//     return $update;
// });

// Route::get('/dalete', function(){
//     $dalete = DB::dalete('dalete from posts where id = ?',[1]);
//     return $dalete;
// });

// Route::get('/read',function(){
//     // $posts = App\Post;
//     $posts = Post::all();
//     foreach($posts as $post){
//         return $post->title;
//     }
// });
// Route::get('/find',function(){
//     // $posts = App\Post;
//     $posts = Post::find(2);
//     return $post -> title;
// });

// Route::get('/findwhere',function(){
//     // $posts = App\Post;
//     $posts = Post::where('id',1)->orderBy('id','desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore',function(){
//     // $posts = App\Post;
//     $posts = Post::where('users_count','<',50)->firstOrFail();
//     return $posts;
// });

// Route::get('/basicinsert',function(){
//     $post = new Post;

//     $post->title = 'new eloquent title insert';
//     $post->content = 'wow eloquent is really cool, look at this content';

//     $post->save();
// });

// Route::get('/create',function(){
//     Post::create(['title'=>'','content'=>'']);
// });

// Route::get('/update', function(){
//     Post::where('id',2)->where('id_admin', 0)->update(['title'=>'new php title','content'=>'i love my instructor edwin']);
// });


// Route::get('/softdelete',function(){
//     Post::find(1)->delete();
// });

// Route::get('/readsoftdelete',function(){
//     // $post = Post::find(1);
//     // $post = Post::withTrashed()->where('id',1)->get();
//     // return $post;
//     $post = Post::onlyTrashed()->where('is_admin',0)->get();
//     return $post;
// });

// Route::get('/restore',function(){
//     Post::withTrashed()->where('id',1)->restore();
// });

// Route::get('/forcedelete',function(){
//     Post::onlyTrashed()->where('is_admin',0)->forceDelete();
// });

// Route::get('/user/{id}/post',function($id){
//     return User::find($id)->post->title;
// });


// Route::get('/post/{id}/user',function($id){
//     return Post::find($id)->user->name;
// });

// Route::get('/posts',function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
//         $post->title;
//     }
// });

// Route::get('users/{id}/role', function ($id) {
//     $user = User::find($id)->role()->orderBy('id','desc')->get();

//     return $user;

//     // foreach($user->roles as $role){
//     //     return $role->name;
//     // }
// // });

// Route::get('user/pivot',function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }
// });

// Route::get('/user/country',function(){
//     $country = Country::find(1);
//     foreach($country->posts as $post){

//     }
// });

// Route::get('/',function(){

// });

Route::resource('/posts', 'PostsController');