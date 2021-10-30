<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::orderby('id','ASC')->paginate(5);

        return view('cursos.index', compact('cursos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
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
            'nombre' => 'required',
            'año' => 'required',
            'ciclo' => 'required',
            'idprofesor' => 'required',
        ]);

        Cursos::create($request->all());

        return redirect()->route('cursos.index')
            ->with('success', 'Curso created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Cursos::find($id);
        return view('cursos.show', compact('curso'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Cursos::find($id);
        return view('cursos.edit', compact('curso'));
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
            'año' => 'required',
            'ciclo' => 'required',
            'idprofesor' => 'required',
        ]);

        Cursos::find($id)->update($request->all());

        return redirect()->route('cursos.index')
            ->with('success', 'Curso updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cursos::find($id)->delete();

        return redirect()->route('cursos.index')
            ->with('success', 'Curso deleted successfully');
    }
}