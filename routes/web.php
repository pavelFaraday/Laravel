<?php


use App\Http\Controllers\PersonController;
// use App\Http\Controllers\PersonController as Person;
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
/*
Route::get('person', function(){
    $person = new PersonController();
    // $person = new Person();
    return $person->name();
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $blogs = [
        [
            'title' => 'Title One',
            'body' => 'This is body text',
            'status' => 1

        ],
        [
            'title' => 'Title Two',
            'body' => 'This is body text',
            'status' => 0
        ],
        [
            'title' => 'Title Three',
            'body' => 'This is body text',
            'status' => 1
        ],
        [
            'title' => 'Title Four',
            'body' => 'This is body text',
            'status' => 0
        ]
    ];
    return view('home', compact('blogs'));
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
});



/*
Route::get('contact', function() {
    return "<h1> This is my Contact page</h1>";
});
*/


// Route with parameters
/*
Route::get('contact/{id}', function($id){
    return $id;
})->name('edit-contact');

Route::get('contact/{id}/comments/{comment}', function(string $id, string $comment){
    return "User ID is: " . $id . "<br>" . "Comment is: " . $comment;
});

*/

// Named Routes
/*
Route::get('services', function() {
    return "<h1> Services Page </h1>";
})->name('services');

Route::get('home', function(){
    return "<a href='".route('edit-contact', 1)."'>About</a>";
});
*/
// Named Routes



// Grouped Routes
/*
Route::group(['prefix' => 'user'], function(){
    Route::get("/", function() {
        return "<h1>Customer List</h1>";
    });
    
    Route::get("/create", function() {
        return "<h1>Customer create</h1>";
    });
    
    Route::get("/show", function() {
        return "<h1>Customer show</h1>";
    });
});
*/
// Grouped Routes


// Fallback Route - 404 page
// Fallback Route must be at the bottom side of al existing routes !!!
/*
Route::fallback(function(){
    return "<h1 style='color:red;'>Route not exists</h1>";
});
*/




