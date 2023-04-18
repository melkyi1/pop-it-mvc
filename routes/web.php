<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'] , '/employees', [Controller\Site::class, 'employees'])
->middleware('auth','admin');
Route::add(['GET', 'POST'], '/discipline', [Controller\Site::class, 'discipline'])
->middleware('auth','admin');
Route::add(['GET', 'POST'], '/subdivision', [Controller\Site::class, 'subdivision'])
->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/employeesSPISOK', [Controller\Site::class, 'employeesSPISOK'])
->middleware('auth');
Route::add(['GET', 'POST'], '/shalte', [Controller\Site::class, 'shalte'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/shalte1', [Controller\Site::class, 'shalte1'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/shalteVIVOD', [Controller\Site::class, 'shalteVIVOD'])
    ->middleware('auth');
