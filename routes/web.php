<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
$url = config('app.url');
URL::forceRootUrl($url);

Route::get('/', function () {
    return view('welcome');
});
