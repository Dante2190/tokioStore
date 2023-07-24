<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias['categorias'] = Categorias::paginate(10);
        return view("categorias.index", $categorias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validar los datos del formulario de creación
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:255'],

            // Agrega aquí cualquier otra validación que necesites para otros campos
        ]);

        // Crear una nueva instancia del modelo Marca y asignar los valores del formulario
        $categorias = new Categorias();
        $categorias->nombre = $request->input('nombre');
        $categorias->descripcion = $request->input('descripcion');
        // Asigna aquí cualquier otro atributo necesario

        // Guardar la nueva marca en la base de datos
        $categorias->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        //return redirect('/marcas/index');
        return redirect()->route('categoria.index')->with('success', 'categorias creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categorias::findOrFail($id);

        return view("categorias.edit", compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosCategoria = request()->except('_token', '_method');
        Categorias::where('id', '=', $id)->update($datosCategoria);

        return redirect('categoria')->with('success', 'categoria Modificada Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categorias)
    {
        //
    }
}
