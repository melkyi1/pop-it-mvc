<?php

namespace Controller;

use Model\EmployeesSpisok;
use Model\Subdivision;
use Model\Discipline;
use Model\Employees;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function employees(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.employees');
        }
        if ($request->method === 'POST' && Employees::create($request->all())) {
            app()->route->redirect('/employees');
        }
        {
            return new View('site.employees');
        }
    }

    public function discipline(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.discipline');
        }
        if ($request->method === 'POST' && Discipline::create($request->all())) {
            app()->route->redirect('/discipline');
        }
        {
            return new View('site.discipline');
        }
//        if ($request->method === 'POST' && employees::create($request->all())) {
//            app()->route->redirect('/employees');
//        }{
//        return new View('site.employees');
//    }
}
    public function subdivision(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.subdivision');
        }
        if ($request->method === 'POST' && Subdivision::create($request->all())) {
            app()->route->redirect('/subdivision');
        }
        {
            return new View('site.subdivision');
        }
    }
    public function employeesSPISOK(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.employeesSPISOK');
        }
    }
}

