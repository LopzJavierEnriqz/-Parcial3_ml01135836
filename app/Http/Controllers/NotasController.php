<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Notas::orderby('id','ASC')->paginate(5);

        return view('notas.index', compact('notas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create');
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
            'idalumno' => 'required',
            'nota1' => 'required',
            'nota2' => 'required',
            'nota3' => 'required',
            'nota4' => 'required',
            'promedio' => 'required',
            'parcial' => 'required',
            'idcurso' => 'required',
            'idprofesor' => 'required',
        ]);

        Notas::create($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Notas created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Notas::find($id);
        return view('notas.show', compact('nota'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Notas::find($id);
        return view('notas.edit', compact('nota'));
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
            'nota1' => 'required',
            'nota2' => 'required',
            'nota3' => 'required',
            'nota4' => 'required',
            'promedio' => 'required',
            'parcial' => 'required',
        ]);

        Notas::find($id)->update($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Notas updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notas::find($id)->delete();

        return redirect()->route('notas.index')
            ->with('success', 'Notas deleted successfully');
    }
}