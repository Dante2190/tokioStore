<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos['departamentos']=Departamentos::paginate(10);
        return view("departamentos.index", $departamentos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("departamentos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /// Validar los datos del formulario de creación
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:255'],

            // Agrega aquí cualquier otra validación que necesites para otros campos
        ]);

        // Crear una nueva instancia del modelo Marca y asignar los valores del formulario
        $departamento = new Departamentos();
        $departamento->nombre = $request->input('nombre');
        $departamento->descripcion = $request->input('descripcion');
        // Asigna aquí cualquier otro atributo necesario

        // Guardar la nueva marca en la base de datos
        $departamento->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        //return redirect('/marcas/index');
        return redirect()->route('departamentos.index')->with('success', 'departamento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamentos $departamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departamentos=Departamentos::findOrFail($id);

        return view("departamentos.edit",compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $datosDepartamento=request()->except('_token','_method');
        Departamentos::where('id','=',$id)->update($datosDepartamento);

        return redirect('departamentos')->with('success','Departamentos Modificado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $departamento = Departamentos::findOrFail($id);
        $departamento->delete();
        return redirect('departamentos')->with('success', 'departamento eliminado correctamente.');
    }
}
