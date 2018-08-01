<?php
use App\Mail\OrderShipped;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/index', 'MainController@index');
Route::get('/search', 'MainController@search');
Route::get('/help', 'MainController@help');
Route::get('/trend', 'GraphController@index');

// Route::get('/piechart.js','StatisticsController@Piechart');
// Route::get('/mapview.js','StatisticsController@MapView');
// Route::get('/','ListController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail',function(){
    Mail::to('987240783@qq.com')->send(new OrderShipped);
    return view('index');
});

Route::get('/cmdtest', 'CMDTestController@index');


Route::get('/got', [
    'middleware' => ['auth'],
    'uses' => function () {
     echo "You are allowed to view this page!";
  }]);

Route::get('/favorite', function(){
    return view('favorite');
});
Route::get('/upload', function(){
    return view('upload');
});
Route::get('/ad_search', function(){
    return view('ad_search');
});
Route::get('/myupload_none', function(){
    return view('myupload_none');
});
Route::get('/myupload', function(){
    return view('myupload');
});
Route::get('/detail','DetailController@index');
