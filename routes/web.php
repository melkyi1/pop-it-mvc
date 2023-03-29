<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'] , '/employees', [Controller\Site::class, 'employees']);
Route::add(['GET', 'POST'], '/discipline', [Controller\Site::class, 'discipline']);
Route::add(['GET', 'POST'], '/subdivision', [Controller\Site::class, 'subdivision']);
Route::add(['GET', 'POST'], '/employeesSPISOK', [Controller\Site::class, 'employeesSPISOK']);
