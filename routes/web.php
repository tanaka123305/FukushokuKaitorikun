<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\PdfOutputController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user_menu',function(){
        return view('user_menu');
    })->name('user_menu');
    
    //一覧表示
    Route::get('/pro_list','App\Http\Controllers\ProductsController@index')->name('pro_list');
    
    // 商品追加画面を表示
    Route::get('/pro_add', 'App\Http\Controllers\ProductsController@add')->name('pro_add');
    // 商品追加確認画面を表示
    Route::post('/plo_add_check', 'App\Http\Controllers\ProductsController@addCheck')->name('pro_add_check');
    // 商品登録完了画面を表示
    Route::post('/pro_add_done', 'App\Http\Controllers\ProductsController@addDone')->name('pro_add_done');
    
    // 買取画面を表示
    Route::get('/kaitori', 'App\Http\Controllers\ProductsController@kaitori')->name('kaitori');
    // 買取確認画面を表示
    Route::post('/kaitori_check', 'App\Http\Controllers\ProductsController@kaitoriCheck')->name('kaitori_check');
    // 買取登録完了画面を表示
    Route::post('/kaitori_done', 'App\Http\Controllers\ProductsController@kaitoriDone')->name('kaitori_done');

    // 商品編集画面を表示
    Route::get('/pro_edit/{id}/', 'App\Http\Controllers\ProductsController@edit')->name('pro_edit');
    // 商品編集確認画面を表示
    Route::post('/plo_edit_check/{id}/', 'App\Http\Controllers\ProductsController@editCheck')->name('pro_edit_check');
    // 商品編集完了画面を表示
    Route::post('/pro_edit_done/{id}/', 'App\Http\Controllers\ProductsController@editDone')->name('pro_edit_done');

    // 商品削除画面を表示
    Route::get('/pro_delete/{id}/', 'App\Http\Controllers\ProductsController@destroy')->name('pro_delete');
    // 商品編集完了画面を表示
    Route::post('/pro_delete_done/{id}/', 'App\Http\Controllers\ProductsController@destroyDone')->name('pro_delete_done');

    // 商品詳細画面を表示
    Route::get('/pro_disp/{id}/', 'App\Http\Controllers\ProductsController@show')->name('pro_disp');

    // // 印刷処理のルート
    // Route::get('/pdf', function () {
    //     $data = [
    //         'title' => 'Sample PDF Document',
    //         'body' => 'This is a sample PDF document generated with Dompdf.'
    //     ];
    //     $pdf = PDF::loadView('pdf.document', $data);
    //     return $pdf->download('document.pdf');
    // });
    
    // 印刷
    Route::post('/kaitori_pdf', 'App\Http\Controllers\PdfOutputController@output')->name('kaitori_pdf');

    // 検索機能
    Route::get('/pro_search', 'App\Http\Controllers\ProductsController@search')->name('pro_search');

});
require __DIR__.'/auth.php';

