<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/academic', function () {
    return view('/sis/academic');
});

Route::get('/course', function () {
    return view('/sis/courseSchedule');
});

Route::get('/exam', function () {
    return view('/sis/examSchedule');
});