<?php

 

Route::get('/', function () {
    return view('plantilla');
});

Route::resource("producto","productoController");