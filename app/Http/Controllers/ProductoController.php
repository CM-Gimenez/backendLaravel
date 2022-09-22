<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //Mostrar todos los productos
    public function index()
    {
        $productos = Producto::paginate(5);
        return \response()->json($productos, 200);
    }
    //buscar un producto por su nombre
    public function indexFind(Request $request)
    {
        $input = $request->all();

        $producto = Producto::find()
            ->where('nombre', 'like', "$($request->txtBuscar)")
            ->get();
        return \response()->json($producto, 200);
    }

    //insrtar productos
    public function store(Request $request)
    {
        $input = $request->all();
        $producto = Producto::create($input);
    }

    //mostrar un producto por su id
    public function show($id)
    {
        $producto = Producto::find($id);
        return \response()->json($producto, 200);
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $producto = Producto::find($id);
        $producto->update($input);
    }

    //eliminar producto
    public function destroy($id)
    {
        try {
            Producto::destroy($id);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
