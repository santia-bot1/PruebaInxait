<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersConcurso;

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
        $users = UsersConcurso::all();
        $numeroUsers = UsersConcurso::count();
        return view('home',compact('users','numeroUsers'));
    }
}
