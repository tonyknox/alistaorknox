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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DirectoriesController@first');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('addresses', 'AddressesController');

// Route::get('akimages/menu/{menu}', 'AkimagesController@menu')->name('imgmenu');
Route::resource('akimages', 'AkimagesController');

Route::get('books/menu/{menu}', 'BooksController@menu')->name('bkmenu');
Route::resource('books', 'BooksController');

// Route::get('buildings/demolished/', 'BuildingsController@demolished')->name('demolished');
// Route::get('buildings/endangered/', 'BuildingsController@endangered')->name('endangered');
Route::get('buildings/plmenu/{menu}', 'BuildingsController@plmenu')->name('plan');
Route::get('buildings/menu/{menu}', 'BuildingsController@menu')->name('buildmenu');
Route::resource('buildings', 'BuildingsController');

Route::get('Chapters/diy', 'ChaptersController@diy')->name('diy');
Route::resource('chapters', 'ChaptersController');

Route::resource('directories', 'DirectoriesController');

Route::resource('diys', 'DiysController');

Route::resource('locations', 'LocationsController');

Route::get('people/menu/{menu}', 'PeopleController@menu')->name('pplmenu');
Route::resource('people', 'PeopleController');

Route::resource('plans', 'PlansController');

Route::get('projects/menu/{menu}', 'ProjectsController@menu')->name('pjmenu');
Route::resource('projects', 'ProjectsController');

Route::get('SearchBooks', 'SearchController@searchbooks');
Route::get('SearchBuildings', 'SearchController@searchbuildings');
Route::get('SearchAddresses', 'SearchController@searchaddresses');
Route::get('SearchImages', 'SearchController@searchimages');
Route::get('SearchChapters', 'SearchController@searchchapters');
Route::get('SearchPlans', 'SearchController@searchplans');
Route::get('SearchProjects', 'SearchController@searchprojects');
Route::get('SearchPeople', 'SearchController@searchpeople');
Route::get('SearchDirectories', 'SearchController@searchdirectories');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
