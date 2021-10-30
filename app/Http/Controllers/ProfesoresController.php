<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;
use App\Profesores;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesores::orderby('id', 'ASC')->paginate(5);
        return view('profesores.index', compact('profesores'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre0' => 'required',
            'apellido0' => 'required',
            'carnet' => 'required',
            'dui' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        // Profesores::insert($request->except(['_token']));
        Profesores::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'carnet' => $request['carnet'],
            'dui' => $request['dui'],
            'genero' => $request['genero'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'password' => encrypt($request['password']),
        ]);

        return redirect()->route('profesores.index')
        ->with('success', 'Profesor created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Alumnos::find($id);
        return view('profesores.show', compact('profesor'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesores::find($id);
        return view('profesores.edit', compact('profesor'));
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
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'carnet' => 'required',
            'dui' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        Profesores::find($id)->update($request->all());

        return redirect()->route('profesores.index')
        ->with('success', 'Profesor updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profesores::find($id)->delete();

        return redirect()->route('profesores.index')
        ->with('success', 'Profesor deleted successfully');
    }
}