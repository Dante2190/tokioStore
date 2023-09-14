<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Producto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos = Foto::all();

        return view("fotos.index", compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();
        return view("fotos.create", compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario de creación
        /*   $request->validate([
            'foto' => ['required', 'string', 'max:255'],
            'producto_id' => ['required', 'string', 'max:255'],

            // Agrega aquí cualquier otra validación que necesites para otros campos
        ]); */

        // Crear una nueva instancia del modelo Marca y asignar los valores del formulario
        $foto = new Foto();
        if ($request->hasFile('foto')) {
            $foto['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        //$foto->foto = $request->input('foto');
        // $foto->producto_id = $request->input('producto_id');
        $foto->producto_id = $request->producto_id;
        //$foto->fecha_agregado =
        // Asigna aquí cualquier otro atributo necesario

        // Guardar la nueva marca en la base de datos
        $foto->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        //return redirect('/marcas/index');
        return redirect()->route('foto.index')->with('success', 'foto creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /* $datos['fotos'] = Foto::where('producto_id', '=', $id)->get();
        return view('fotos.index', $datos, compact('id')); */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        //
    }
}
