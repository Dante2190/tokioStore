<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedors['proveedors'] = Proveedores::paginate(10);
        return view("proveedores.index", $proveedors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("proveedores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario de creación
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],

            // Agrega aquí cualquier otra validación que necesites para otros campos
        ]);

        // Crear una nueva instancia del modelo Marca y asignar los valores del formulario
        $proveedor = new Proveedores();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->email = $request->input('email');
        // Asigna aquí cualquier otro atributo necesario

        // Guardar la nueva marca en la base de datos
        $proveedor->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        //return redirect('/marcas/index');
        return redirect()->route('proveedor.index')->with('success', 'Proveedor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedor = Proveedores::findOrFail($id);

        return view("proveedores.edit", compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosProveedor = request()->except('_token', '_method');
        Proveedores::where('id', '=', $id)->update($datosProveedor);

        return redirect('proveedor')->with('success', 'proveedor Modificado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedores::findOrFail($id);
        $proveedor->delete();
        return redirect('proveedor')->with('success', 'Marca eliminado correctamente.');
    }
}
