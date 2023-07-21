<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas['marcas']=Marca::paginate(10);

        return view("marcas.index", $marcas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("marcas.create");
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
        $marca = new Marca();
        $marca->nombre = $request->input('nombre');
        $marca->descripcion = $request->input('descripcion');
        // Asigna aquí cualquier otro atributo necesario

        // Guardar la nueva marca en la base de datos
        $marca->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        //return redirect('/marcas/index');
        return redirect()->route('marca.index')->with('success', 'Marca creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $marca=Marca::findOrFail($id);

        return view("marcas.edit",compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosMarca=request()->except('_token','_method');
        Marca::where('id','=',$id)->update($datosMarca);

        return redirect('marca')->with('success','Marca Modificado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();
        return redirect('marca')->with('success', 'Marca eliminado correctamente.');
    }
}
