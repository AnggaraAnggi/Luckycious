<?php

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

// use Symfony\Component\Routing\Route;


// Route::get('/', function () {
//     $text = 'Luckycious Present';
//     return view('page.index',['text' => $text]);
// });

// Route::get('/about', function () {
//     $text = 'About Me';
//     return view('page.about',['text' => $text]);
// });

// Route::get('/contact', function () {
//     $text = 'Contact Us';
//     return view('page.contact',['text' => $text]);
// });

use App\Post;

Route::get('/', 'PagesController@index');
Route::get('/portofolio', 'PagesController@portofolio');

Route::get('/contact', 'ContactsController@index');
Route::get('/create_contact', 'ContactsController@create');
Route::post('/contact', 'ContactsController@store');

Route::get('/posts/{post}', function (Post $id) {
    return view('layout.post');
});
