<?php
$controller_path = 'App\Http\Controllers\AdminPanel';

Route::get('/admin-page', $controller_path . '\dashboard\AdminHomePage@index');
Route::get('/new-form', function (){
    return view('components.form.new-form');
});
