<?php
//POST
Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create')->name('create');
Route::post('/posts', 'PostsController@store')->name('post_store');
Route::get('/posts/{post}', 'PostsController@show');

//WYSIWYG TEST
// Route::post('/submit', function(\Illuminate\Http\Request $request){
//   $content = $request['content'];
//   return view('posts.output', ['content' => $content]);
// })->name('submit');

//TAGS
Route::get('/posts/tags/{tag}', 'TagsController@index');

//COMMENTS
Route::post('/posts/{post}/comments', 'CommentsController@store');

//REGISTRATION
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

//SESSIONS
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//USERS
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@updateAvatar');
