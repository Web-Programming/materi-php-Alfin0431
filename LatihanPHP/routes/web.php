<?php

use Illuminate\Support\Facades\Route;
use Pest\Arch\Objects\FunctionDescription;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view(
        'beranda',
        [
            'name' => 'Alfin',
            'email' => 'alfinnn831@gmail.com',
            'alamat' => 'Jl. Jalanin Aja'
        ]
    );
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view(
        'berita',
        ['id' => $id, 'judul' => $judul]
    );

});


