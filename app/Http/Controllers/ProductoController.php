<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Unidad_Medida;
use Illuminate\Http\Request;
use Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datosProductos['productos'] = Producto::paginate(12);
        
        return view('productos/show',$datosProductos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data =  array();
        $data['unidadesmedidas']  =  Unidad_Medida::paginate(5);
        $data['categorias']     =  Categoria::paginate(5);
        $data['productos']     =  Producto::all();

        if (Auth::user()->rol_id==2 ) {
            return view('productos/create',compact("data"));
        } else {
            return view('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosProducto =  request()->all();
        $datosProducto = request()->except('_token');

        if(request()->hasFile('foto')){
            $datosProducto ['foto'] = request()->file('foto')->store('uploads','public');
        }

        Producto::insert($datosProducto);

        $datosProductos['productos'] = Producto::paginate(3);

        return view('welcome',$datosProductos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
         

        $productos = DB::table('productos')->paginate(15);


        //$datosProducto['productos'] = Producto::paginate(5);
         return view('productos/show', ['productos' => $productos]);
         
      
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto :: findOrFail($id);
        $data =  array();
        $data['unidadesmedidas']  =  Unidad_Medida::paginate(5);
        $data['categorias']     =  Categoria::paginate(5);
        $data['productos']     =  Producto::all();


        return view('productos.edit',compact('producto'),compact("data"));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

   
}
