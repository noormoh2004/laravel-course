<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Noor';
    $departments = [
        '1' => 'technecal',
        '2' =>  'Finance',
        '3' =>  'sales',
    ];
    return view(view: 'about',  data: compact('name', 'departments'));
});

Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [
        '1' => 'technecal',
        '2' =>  'Finance',
        '3' =>  'sales',
    ];
    return view('about', compact('name', 'departments'));
});
Route::get('tasks', function () {
    return view('tasks');
});
Route::post('create', function () {
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name' => $task_name]);
    return view('tasks');
});
