
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
Route::get('/testmodel', function(){
	$a =App\post::all();
return $a;
});
Route::get('/testmodel1', function(){
	$a =App\post::find(1);
return $a;
});
Route::get('/testmodel2', function(){
	$a =App\post::where('title','like','%cepat nikah%')->get();
return $a;
});
Route::get('/testmodel3', function(){
	$post =App\post::find(1);
	$post->title ="ciri keluarga sakinah";
return $post;
});
Route::get('/testmodel4', function(){
	$post =App\post::find(1);
	$post->delete();
});
Route::get('/testmodel5', function(){
	$post =new App\post;
	$post->title ="7 amalan pembuka jodoh2";
	$post->content ="solat malam,sedekah,puasa sunah,silahturahmi,senyum,dan,tobat";
	$post->save();
return $post;
});
Route::get('cektampilan', function() {
	return view('layouts.master');
});
// Route::get('/orangtua', function() {
// $ortu = App\orang_tua::all();
// 	foreach ($ortu as $key) {
// 		echo $key->nama_ayah;
// 		echo " dengan ";
// 		echo $key->nama_ibu;
// 		echo " mempunyai anak";
// 		foreach ($key->siswa as $data) {
// 			echo "<li>".$data->nama."</li>";
// 			echo "<hr>";
// 		}
		
// 	}
// });


Route::get('/coba', 'myController@index');
Route::get('/coba2','MyController@tampilan');
Route::get('/coba3','MyController@tampilan2');
Route::get('/coba4','MyController@percobaan');

Route::resource('orangtua','orangtuacontroller');