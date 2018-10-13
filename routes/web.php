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
    return view('viewuser.home');
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/budaya', 'BudayaController@indexviewuser')->name('budayauser');
Route::get('/tarian', 'BudayaController@indextarian')->name('tarian');
Route::get('/detailtarianuser', 'BudayaController@indexdetailtarian')->name('detailtarianuser');
Route::get('/makanan', 'BudayaController@indexmakanan')->name('makanan');
Route::get('/detailmakananuser', 'BudayaController@indexdetailmakanan')->name('detailmakananuser');
Route::get('/batik', 'BudayaController@indexbatik')->name('batik');
Route::get('/detailbatikuser', 'BudayaController@indexdetailbatik')->name('detailbatikuser');

Route::get('/sejarah', 'SejarahController@indexviewuser')->name('sejarahuser');
Route::get('/detailsejarahuser', 'SejarahController@indexdetailsejarah')->name('detailsejarahuser');

Route::get('/umkm', 'UmkmController@indexviewuser')->name('umkmuser');
Route::get('/detailumkmuser', 'UmkmController@indexdetailumkm')->name('detailumkmuser');

Route::get('/wisata', 'InputwisataController@datainputwisata')->name('datainputwisata');




Route::get('/inputwisata', 'InputwisataController@indexuser')->name('inputwisata');


Route::get('/homeadminbudaya','BudayaController@index')->name('homeadminbudaya');
Route::get('/tobudaya','BudayaController@create');
Route::post('/createbudaya','BudayaController@store')->name('createbudaya');
Route::get('/budayashow/{id}','BudayaController@show')->name('detailbudaya');
Route::get('/editbudaya/{id}','BudayaController@edit')->name('editbudaya');
Route::post('/updatebudaya/{id}','BudayaController@update')->name('updatebudaya');
Route::delete('/deletebudaya/{id}','BudayaController@destroy')->name('deletebudaya');



Route::get('/homeadminwisata','WisataController@index')->name('homeadminwisata');
Route::get('/towisata','WisataController@create');
Route::post('/createwisata','WisataController@store')->name('createwisata');
Route::get('/wisatashow/{id}','WisataController@show')->name('detailwisata');
Route::get('/editwisata/{id}','WisataController@edit')->name('editwisata');
Route::post('/updatewisata/{id}','WisataController@update')->name('updatewisata');
Route::delete('/deletewisata/{id}','WisataController@destroy')->name('deletewisata');


Route::get('/homeadminumkm','UmkmController@index')->name('homeadminumkm');
Route::get('/toumkm','UmkmController@create');
Route::post('/createumkm','UmkmController@store')->name('createumkm');
Route::get('/umkmshow/{id}','UmkmController@show')->name('detailumkm');
Route::get('/editumkm/{id}','UmkmController@edit')->name('editumkm');
Route::post('/updateumkm/{id}','UmkmController@update')->name('updateumkm');
Route::delete('/deleteumkm/{id}','UmkmController@destroy')->name('deleteumkm');



Route::get('/homeadminsejarah','SejarahController@index')->name('homeadminsejarah');
Route::get('/tosejarah','SejarahController@create');
Route::post('/createsejarah','SejarahController@store')->name('createsejarah');
Route::get('/sejarahshow/{id}','SejarahController@show')->name('detailsejarah');
Route::get('/editsejarah/{id}','SejarahController@edit')->name('editsejarah');
Route::post('/updatesejarah/{id}','SejarahController@update')->name('updatesejarah');
Route::delete('/deletesejarah/{id}','SejarahController@destroy')->name('deletesejarah');



Route::get('/homeadmininputwisata','InputwisataController@index')->name('homeadmininputwisata');
// Route::get('/tosejarah','SejarahController@create');
Route::post('/createinputwisata','InputwisataController@store')->name('createinputwisata');
Route::get('/inputwisatashow/{id}','InputwisataController@show')->name('detailinputwisata');
// Route::get('/editsejarah/{id}','SejarahController@edit')->name('editsejarah');
// Route::post('/updatesejarah/{id}','SejarahController@update')->name('updatesejarah');
Route::delete('/deleteinputwisata/{id}','InputwisataController@destroy')->name('deleteinputwisata');
Route::put('/status/{id}','InputwisataController@konfirmasi')->name('konfirmasi');
