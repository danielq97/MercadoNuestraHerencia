<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Unidad_Medida;
use Illuminate\Http\Request;
use Auth;
//Me permite el borrado del storage
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nombre = $request->get('nombre');
       
        $productos = Producto::orderBy('id','DESC')
        
        ->nombre($nombre)
        ->paginate(12);
        
        return view('productos/show', ['productos' => $productos]);
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

        if ( is_null (Auth::user())){
            return redirect('/');
        }
        else if (Auth::user()->rol_id==2 ) {
            return view('productos/create',compact("data"));
        } else if (Auth::user()->rol_id==1 ) {
            return redirect('/');
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
        $data =  array();
        $data['unidadesmedidas']  =  Unidad_Medida::all();
        $data['categorias']     =  Categoria::all();
       

        //
        $datosProducto =  request()->all();
        $datosProducto = request()->except('_token');

        if(request()->hasFile('foto')){
            $datosProducto ['foto'] = request()->file('foto')->store('uploads','public');
        }

        Producto::insert($datosProducto);

        $data['productos']     =  Producto::all();
        return view('productos/create',compact("data"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         

        $nombre = $request->get('nombre');
       
        $productos = Producto::orderBy('id','DESC')
        
        ->nombre($nombre)
        ->paginate(12);

        //$productos = DB::table('productos')->paginate(12);

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
       
       
       
        
        $unidadmedidaproducto1 = Unidad_Medida:: findOrFail($producto->unidadmedida_id);
        $categoriaproducto1 = Categoria :: findOrFail($producto->categoria_id);


        $data =  array();        
        $data['unidadesmedidas']  =  Unidad_Medida::where('id', '!=', $unidadmedidaproducto1->id)->get();
        $data['categorias']     =  Categoria::where('id', '!=', $categoriaproducto1->id)->get();
        $data['productos']     =  Producto::all();

        return view('productos.edit',compact('producto'),compact("data",'unidadmedidaproducto1','categoriaproducto1'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto = request()->except(['_token','_method']);

        if(request()->hasFile('foto')){
            $producto = Producto :: findOrFail($id);

            Storage::delete('public/'.$producto);


            $datosProducto ['foto'] = request()->file('foto')->store('uploads','public');
        }



        Producto::where('id','=',$id)->update($datosProducto);


        //Consultar como quedó el registro actual una vez que se guardo con el update
        $producto = Producto :: findOrFail($id);

        $unidadmedidaproducto1 = Unidad_Medida:: findOrFail($producto->unidadmedida_id);
        $categoriaproducto1 = Categoria :: findOrFail($producto->categoria_id);


        $data =  array();        
        $data['unidadesmedidas']  =  Unidad_Medida::where('id', '!=', $unidadmedidaproducto1->id)->get();
        $data['categorias']     =  Categoria::where('id', '!=', $categoriaproducto1->id)->get();
        $data['productos']     =  Producto::all();


        return view('productos.edit',compact('producto'),compact("data",'unidadmedidaproducto1','categoriaproducto1'));
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
