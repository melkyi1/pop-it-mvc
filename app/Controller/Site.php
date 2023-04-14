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
use Src\Validator\Validator;

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
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
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
        if ($request->method === 'POST' && Employees::create($request->all())) {
            app()->route->redirect('/employees');
        }
        $discipline=Discipline::all();
        $Subdivisions=Subdivision::all();
        {
            return new View('site.employees', ['Subdivisions'=>$Subdivisions, 'discipline'=>$discipline]);
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
        $discipline=Discipline::all();
        $employees=Employees::all();
        if ($request->method === 'GET') {
            return new View('site.employeesSPISOK', ['employees'=>$employees, 'discipline'=>$discipline]);
        }
//        if ($request->method === 'POST' && Employees::retrieved($request->all())) {
//            app()->route->redirect('/employees');
//        }
        $employees=Employees::all();
        $discipline=Discipline::all();
        {
            return new View('site.employeesSPISOK', ['employees'=>$employees, 'discipline'=>$discipline]);
        }
    }
    public function Shalte(Request $request)
    {
        $disciplines = Discipline::all();
        $students = Students::all();
        $performances = Performances::all();
        $value = $request->all();
        $value1 = $request->all();
        $value2 = $request->all();
        $value3 = $request->all();
        $value4 = $request->all();
        if (isset($value['search_value'], $value1['search_value1'], $value2['search_value2'], $value3['search_value3'], $value4['search_value4'])) {
            $chatons = DB::table('performances')
                ->join('students', 'performances.studentID', '=', 'students.studentID')
                ->join('disciplines', 'performances.disciplineID', '=', 'disciplines.disciplineID')
                ->join('controls', 'disciplines.controlID', '=', 'controls.controlID')
                ->join('groups', 'students.groupID', '=', 'groups.groupID')
                ->where('groups.group', $value['search_value'])
                ->where('students.surname', $value1['search_value1'])
                ->where('students.name', $value2['search_value2'])
                ->where('students.middlename', $value3['search_value3'])
                ->where('disciplines.discipline', $value4['search_value4'])
                ->get();
        }
        return (new View())->render('site.anarchist', ['disciplines' => $disciplines, 'performances' => $performances, 'students' => $students, 'chatons' => $chatons]);
    }
}

