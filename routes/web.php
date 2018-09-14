<?php
use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//delete database content
/*Route::get('/delete', function(){

	$delete = DB::delete('delete from posts where id=?', [1]);

	return $delete;
});*/


//update database table
/*Route::get('/update', function(){

	$updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

	return $updated;
});*/

//Post content in database on web
/*Route::get('/read', function(){

	$result = DB::select('select * from posts where id = ?', [1]);

	foreach($result as $post){
		return $post ->title;
	}

});*/

//INSERT DATA IN TABLE DATABASE
/*Route::get('/insert', function(){

	DB::insert('insert into posts(title,content) values(?,?)',['PHP', 'Pasar']);

});*/
/*Route::get('/', function () {
    return view('welcome');

    
});*/

/*Route::get('/about', function () {
    return "about page";

    
});

Route::get('/post/{id}', function($id) {
    return "post page".$id;

    
});

Route::get('/contactus', function () {
    return "contact us page";

    
});

Route::get('admin/post/example', array('as'=>'admin.home', function(){

	$url =route('admin.home');

	return "this url is ". $url;
}));



//Route::get('/post/{id}', 'PostController@create');

//Route::resource('post', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('post/{id}', 'PostController@show_post');*/

/*
|------------------------------------------------------------------
| ELOQUENT
|------------------------------------------------------------------
*/

/*Route::get('/read', function(){

	$posts = Post::all();

	foreach($posts as $post){

		return $post->title;

	}
});*/


/*Route::get('/find', function(){

	$post =Post::find(2);

	return $post->title;
});*/


/*Route::get('/findwhere', function(){

	$posts = Post::where('id', 4)->orderBy('id','desc')->take(1)->get();

	return  $posts;
});*/

/*Route::get('/findmore', function(){

	$posts = Post::findOrFailed(3);

	return $posts;

	$posts = Post::where('users_count', '<', 50)->firstOrFailed();


});*/

//INSERT NEW DATA IN COLUMN
Route::get('/basicinsert', function(){

	$post = new Post;

	$post->title = 'new ORM title insert';
	$post->content = 'new content';

	$post->save();
});

/*Route::get('/basicinsert2', function(){

	$post = Post::find(2);

	$post->title = 'new ORM title insert 2';
	$post->content = 'new content 2';

	$post->save();


});*/

//CREATE DATABASE
/*Route::get('/create', function(){

	Post::create(['title'=>'the create method', 'content'=>'Wow I am learning a lot with laravel']);
});*/


//UPDATE DATA IN COLUMN
/*Route::get('/update', function(){

	Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love myself']);
});*/

//DELETE DATA IN COLUMN
/*Route::get('/delete', function(){

	$post =Post::find(3);

	$post->delete();
});
*/
/*Route::get('/delete2', function(){

	Post::destroy(2,5,6);
});*/


//SOFTDELETE COLUMN
/*Route::get('/softDelete', function(){

	Post::find(2)->delete();

});*/


//POST THE DELETED ITEM ON WEB
/*Route::get('/readsoftdelete', function(){

	$post = Post::find(1);

	return $post;

	$post = Post::onlyTrashed()->where('is_admin',0)->get();

	return $post;
});*/

//restore data back
/*Route::get('/restore', function(){

	Post::withTrashed()->where('is_admin', 0)->restore();
});*/

/*Route::get('/forcedelete', function(){

	Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
});
*/
/*
|------------------------------------------------------------------
| ELOQUENT Relationship
|------------------------------------------------------------------
*/

//One to one relationship
/*Route::get('/user/{id}/post', function($id){

	return User::find($id)->post->title;

});

Route::get('/post/{id}/user', function($id){

	return Post::find($id)->user->name;

});*/


//One to many relationship
Route::get('/posts', function(){

	$user = User::find(1);

	foreach($user->posts as $post){

		echo $post->title . "<br>";
	}


});