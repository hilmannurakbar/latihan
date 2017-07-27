
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
	return '<h1>hallo</h1>'
	.'selamat datang di web saya<br>'
	.'laravel ,emang keren.';
});
Route::get('/latihan', function() {
	return view('about');
});
Route::get('/latihan/1', function() {
	return view('about.belajar');
});
Route::get('/latihan/2', function() {
	return view('about.belajar2');
});
Route::get('/latihan/3', function() {
	return view('about.belajar3');
});
 Route::get('/latihan/{nama}/{sekolah}/{umur}', function($a,$b,$c) {
	return '<br> nama : '.$a.
			'<br> sekolah : '.$b.
			'<br> umur : ' .$c;
});
Route::get('/latihan/{nama}', function() {
	$a="jhon";
	return 'nama:  '.$a;
			
});
