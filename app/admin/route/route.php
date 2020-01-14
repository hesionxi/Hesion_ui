<?php

use think\facade\Route;

Route::get('test', 'index/home');
Route::post('test/save', 'index/save');