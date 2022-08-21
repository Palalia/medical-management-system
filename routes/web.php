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
Auth::routes();
//Route::post('/register', ['RegisterController@register'])->name('register.perform');
//Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class,'create'])->name('register.create');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function () {
        return view('contenido/contenido');
    });
});
?>