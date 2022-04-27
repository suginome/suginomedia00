<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 

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
Route::group(['middleware' => 'auth'], function () {
    // この中に認証済み後のルート定義を入れる
});


// 本のダッシュボード表示
Route::get('/', [BookController::class, 'index']);


Route::get('/list', [BookController::class, 'show']);


// Route::group(['middleware' => 'auth'], function(){
    // 新「本」を追加
    Route::post('/books', [BookController::class, 'store']);
    
    //「本」の更新画面表示
    Route::get('/booksedit/{book}',[BookController::class, 'edit']);
    
    //「本」の更新処理
    Route::post('books/update',[BookController::class, 'update']);
    
    // 本を削除
    Route::delete('/book/{book}', [BookController::class, 'destroy']);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
