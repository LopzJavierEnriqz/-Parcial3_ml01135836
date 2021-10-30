<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;

use Barryvdh\DomPDF\PDF;

class AlumnosController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumnos::orderby('id', 'ASC')->paginate(5);
        return view('alumnos.index', compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
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
            'fech_nac' => 'required',
            'direccion' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);


        // Alumnos::insert($request->except(['_token']));
        Alumnos::create([
            'nombre0' => $request['nombre0'],
            'nombre1' => $request['nombre1'],
            'apellido0' => $request['apellido0'],
            'apellido1' => $request['apellido1'],
            'fech_nac' => $request['fech_nac'],
            'direccion' => $request['direccion'],
            'genero' => $request['genero'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
        ]);

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumnos created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumnos::find($id);
        return view('alumnos.show', compact('alumno'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumnos::find($id);
        return view('alumnos.edit', compact('alumno'));
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
            'nombre0' => 'required',
            'apellido0' => 'required',
            'direccion' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        Alumnos::find($id)->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumnos::find($id)->delete();

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno deleted successfully');
    }
}
