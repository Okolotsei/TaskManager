<?php
use Illuminate\Http\Request;

Route::get('/', function () {
    session(['action' => 'start']);
    return view('deffault');
})->name('start');//стартовый

Route::get('/authorization', function () {
    return view('deffault', ['inf' => 'authorization']);
})->name('auth');

Route::post('/authorization', 'UsersController@authorization');


Route::get('/exit', function () {
    session(['user_id' => '']);
    session(['role_id' => '']);
    session(['FIO' => '']);
    session(['message'=>'']);
    session(['login'=>'']);;
    return redirect()->route('start');
});
Route::get('/task', function () {
    session(['action'=>'task']);
    return view('deffault');
})->middleware('noauth');

Route::get('/task/create', function () {
    return view('deffault', ['inf' => 'createtask']);
})->middleware('noauth');
Route::post('/task/create', function (Request $request) {
    return view('deffault', ['inf' => 'testform']);
})->middleware('noauth')->name('create');

Route::get('/task/my', function () {
    return view('deffault', ['inf' => 'testform']);
})->middleware('noauth');
Route::get('/task/forme', function () {
    return view('deffault', ['inf' => 'testform']);
})->middleware('noauth');
Route::get('/admin', function () {
    return view('deffault', ['inf' => 'testform']);
})->middleware('noauth');





