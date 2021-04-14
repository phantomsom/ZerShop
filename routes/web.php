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
    # Obtain latest and all items from Item database
    $items = App\Models\Item::latest()->get();

    # Return the shop view, and pass in every item object
    return view('pages/shop', [
        'items' => $items
    ]);
});

Route::get('/cart', function () {
    # Obtain everything in shopping cart
    $cartItems = App\Models\ShoppingCart::all();

    if(!empty($cartItems))
    {
        # Returns the shopping cart view, while passing in ShoppingCart objects
        return view('pages/cart', [
            'cartItems' => $cartItems
        ]);
    }
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/checkout', function () {
    return view('pages/checkout');
});

Route::get('/contact-us', function () {
    return view('pages/contact-us');
});

Route::get('/my-account', function () {
    return view('pages/my-account');
});

Route::get('/shop-detail', function () {
    return view('pages/shop-detail');
});

Route::get('/service', function () {
    return view('pages/service');
});

Route::get('/service', function () {
    return view('pages/service');
});

Route::get('/wishlist', function () {
    return view('pages/wishlist');
});

Route::resource('itemCRUD','ItemCRUDController');

# A better way to execute the below logic would be to have the above in a controller
# If we're showing a blog post, it makes sense to call the Controller's function, show
Route::get('/posts/{post}', [PostsController::class, 'show']);

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

