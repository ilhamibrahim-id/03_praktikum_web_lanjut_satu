<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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
/* 02_praktikum_web_lanjut_satu 

Route::get('/about', function () {
    return '1941720180 - ILHAM IBRAHIM';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel Dengan id '.$id;
});
**/

/* 02_praktikum_web_lanjut_dua 

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

 */  

/* 02_praktikum_web_lanjut_tiga      */

Route::get('/home', [Praktikum3::class, 'index']);

Route::prefix('/products')->group(function () {
    Route::get('/edugame', [Praktikum3::class, 'edugame']);
    Route::get('/friendkids', [Praktikum3::class, 'friendkids']);
    Route::get('/storybooks', [Praktikum3::class, 'storybooks']);
    Route::get('/kidsongs', [Praktikum3::class, 'kidsongs']);
   });

   Route::get('/berita/{isi}', [Praktikum3::class, 'berita']);

   Route::prefix('/program')->group(function () {
    Route::get('/karir', [Praktikum3::class, 'karir']);
    Route::get('/magang', [Praktikum3::class, 'magang']);
    Route::get('/industri', [Praktikum3::class, 'industri']);
   });

   Route::get('/about', [Praktikum3::class, 'about']);
   Route::resource('kontak', kontakController::class);


