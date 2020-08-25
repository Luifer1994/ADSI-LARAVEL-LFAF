<?php

namespace App\Http\Controllers;
use App\Estudiantes;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $estudiantes    =  Estudiantes::all();
        $funcionarios   =  User::all();
        $estudiantesM   =  Estudiantes::where('id_genero', '=', 1)->count();
        $estudiantesF   =  Estudiantes::where('id_genero', '=', 2)->count();
        $cerezos        =  Estudiantes::where('id_sede', '=', 1)->count();
        $consolata      =  Estudiantes::where('id_sede', '=', 2)->count();
        $data = "$cerezos, $consolata";
        return view('home', compact('estudiantes', 'funcionarios' , 'estudiantesM', 'estudiantesF', 'data'));
    }

}
