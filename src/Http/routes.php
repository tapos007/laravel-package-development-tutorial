<?php

Route::get('demo/test',function (){
    return 'Test';
});

Route::get('demo/html',function (){
   return Demo::hello();
});

Route::get('demo','Websanova\Demo\Http\DemoController@index');
Route::get('demo/config',function (){
    return config('websanova-demo.hello') . " ".
     config('websanova-demo.world') ;
});