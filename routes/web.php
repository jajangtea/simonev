<?php

//disable halaman register [pendaftaran]
Auth::routes(['register' => false]);

Route::get('/',['uses'=>'FrontendController@welcome','as'=>'frontend.index']);
Route::get('/logout',['uses'=>'Auth\LoginController@logout','as'=>'logout']);

Route::group (['prefix'=>'admin','middleware'=>['disablepreventback','web', 'auth']],function() {     
   
});