<?php

use Faker\Provider\Lorem;
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

Route::get('/', function () {
    $portfolio = [
        [
            "title" => "Judul Pos 1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus incidunt optio odio placeat? Cum dignissimos asperiores sunt nisi, voluptate corporis ut quibusdam atque debitis soluta quam eius dolorum quis magni!"
        ],
        [
            "title" => "Judul Pos 2",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos delectus nobis fugiat repellendus r"
        ],
        [
            "title" => "Judul Pos 3",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos delectus nobis fugiat repellendus reprehenderit s"
        ]
    ];
    return view('pages/home', [
        "portfolio" => $portfolio
    ]);
});
