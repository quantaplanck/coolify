<!-- simple testing -->

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin123@example.com' && $password === 'admin123') {
        return redirect('/');
    } else {
        return back()->with('error', 'Wrong credentials!');
    }
});
