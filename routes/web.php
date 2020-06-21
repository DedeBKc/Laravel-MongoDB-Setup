<?php

use App\User;

Route::get('/', function () {
    // return view('welcome');
    $users = User::all();
    return $users;
});
