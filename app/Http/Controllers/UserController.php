<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usuarios_domicilio;

use App\Models\users;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // $usuarios = usuarios_domicilio::all();

     //   return $usuarios;

     $users = DB::table('user_domicilio')
            ->join('users1', 'user_domicilio.user_id', '=', 'users1.user_id')
           // ->select('user_domicilio.domicilio', 'user_domicilio.numero_exterior', 'user_domicilio.colonia','user_domicilio.cp','user_domicilio.ciudad',Carbon::parse('users1.fecha_nacimiento')->age)
           ->select(DB::raw('*,TIMESTAMPDIFF(YEAR,users1.fecha_nacimiento,CURDATE()) AS edad'))
            ->get();

        return $users;

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
