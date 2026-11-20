<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Laravel\Prompts\Task;
use App\Http\Controllers\UserController;

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
Route::get('tasks', [TaskController::class, 'index']);
Route::post('create', [TaskController::class, 'create']);
Route::post('delete/{id}', [TaskController::class, 'destroy']);
Route::post('edit/{id}', [TaskController::class, 'edit']);
Route::post('update', [TaskController::class, 'update']);
Route::get('app', function () {
    return view('layouts.app');
});



Route::get('users', [UserController::class, 'index']);
Route::post('users/create', [UserController::class, 'create']);
Route::post('users/delete/{id}', [UserController::class, 'destroy']);
Route::post('users/edit/{id}', [UserController::class, 'edit']);
Route::post('users/update', [UserController::class, 'update']);
