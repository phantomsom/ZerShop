<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

/*
Route::get('/', function () {
    return view('test', [
        'name' => request('name')
    ]);

});
*/

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/shop', function () {
    return view('pages/shop');
});

Route::get('/cart', function () {
    return view('pages/cart');
});

Route::get('/contact', function () {
    return view('pages/contact');
});
/*
# This function accepts a wildcard, called post, we then accept the wildcard to pass it as a key to access a value in the database.
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if(!array_key_exists($post, $posts)){
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);

});
*/

# A better way to execute the above logic would be to have the above in a controller
# If we're showing a blog post, it makes sense to call the Controller's function, show
Route::get('/posts/{post}', [PostsController::class, 'show']);