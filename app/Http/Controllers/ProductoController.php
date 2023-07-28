<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Departamentos;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos['productos']=Producto::paginate(10);
        return view("productos.index", $productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categorias::all();
        $departamentos = Departamentos::all();
        $marcas = Marca::all();
        $proveedores = Proveedores::all();
        return view('productos.create', compact('categorias', 'departamentos', 'marcas', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string|max:255',
            'talla' => 'required|string|max:10',
            'categoria_id' => 'required|integer|exists:categorias,id',
            'departamento_id' => 'required|integer|exists:departamentos,id',
            'marca_id' => 'required|integer|exists:marcas,id',
            'proveedor_id' => 'required|integer|exists:proveedores,id',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->talla = $request->talla;
        $producto->categoria_id = $request->categoria_id;
        $producto->departamento_id = $request->departamento_id;
        $producto->marca_id = $request->marca_id;
        $producto->proveedor_id = $request->proveedor_id;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('producto.index')->with('success', 'El producto ha sido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        $categorias = Categorias::all();
        $departamentos = Departamentos::all();
        $marcas = Marca::all();
        $proveedores = Proveedores::all();
        return view('productos.edit', compact('categorias', 'departamentos', 'marcas', 'proveedores','producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosProducto=request()->except('_token','_method');
        Producto::where('id','=',$id)->update($datosProducto);

        return redirect('producto')->with('success','Producto Modificado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect('producto')->with('success', 'Producto eliminado correctamente.');
    }


}
