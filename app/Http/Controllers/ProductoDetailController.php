<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Unidad_Medida;
use Illuminate\Http\Request;

class ProductoDetailController extends Controller
{
    
    public function index($id) {
        $producto = Producto::findOrFail($id);
        $unidadmedida = Unidad_Medida::findOrFail( $producto->unidadmedida_id   );
        return view('/productos/detail',compact('producto'),compact('unidadmedida'));
     }
     public function create() {
        echo 'create';
     }
     public function store(Request $request) {
        echo 'store';
     }
     public function show($id) {
        echo 'show';
     }
     public function edit($id) {
        echo 'edit';
     }
     public function update(Request $request, $id) {
        echo 'update';
     }
     public function destroy($id) {
        echo 'destroy';
     }



}
