<?php

namespace App\Http\Controllers;

use App\Models\UsersConcurso;
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Ciudad;
date_default_timezone_set("America/Bogota");

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Crypt;

class UsersConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UsersConcurso::all();
        $departamentos = Departamento::all();
        $ciudades = Ciudad::all();
        return view('welcome',compact('users','departamentos','ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "nombre" => "required|string",
            "apellidos" => "required|string",
            "cedula" => "required",
            "departamento" => "required|string",
            "ciudad" => "required|string",
            "Celular" => "required",
            "email" => "required |email",
            "autorizacion" => "required",
        ]);
        $user_concurso = new UsersConcurso();
        $fechaActual = date('Y-m-d H:i:s');
        try {
            
            $user_concurso->Nombres = $request->get('nombre');
            $user_concurso->Apellidos = $request->get('apellidos');
            $user_concurso->Cedula = $request->get('cedula');
            $user_concurso->Departamento = $request->get('departamento');
            $user_concurso->Ciudad = $request->get('ciudad');
            $user_concurso->Email = $request->get('email');
            $user_concurso->Celular = $request->get('Celular');
            $user_concurso->Autorizacion = $request->get('autorizacion');
            $user_concurso->created_at = $fechaActual;
            $user_concurso->Ganador = 'No';
            $user_concurso->save();

            return redirect('/')->with(["estado" => "ok"]);

        } catch (\Throwable $th) {
            
            return redirect('/')->with(["estado" => "no"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersConcurso  $usersConcurso
     * @return \Illuminate\Http\Response
     */
    public function show(UsersConcurso $usersConcurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersConcurso  $usersConcurso
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersConcurso $usersConcurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersConcurso  $usersConcurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersConcurso $usersConcurso)
    {
        $numeroUsers = UsersConcurso::count();
        $ganador = random_int(1,$numeroUsers);
        $userGanador = UsersConcurso::find($ganador);
        $fechaActual = date('Y-m-d H:i:s');
        try{
            $userGanador->Ganador = 'Si';
            $userGanador->updated_at = $fechaActual;
            
            $userGanador->update();

            return redirect('/home')->with('ganador','ok');
        }catch (\Throwable $th) {
            dd($th);
            return redirect('/home')->with('ganador','no');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersConcurso  $usersConcurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersConcurso $usersConcurso)
    {
        //
    }
}
