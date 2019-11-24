<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use Auth;

class PedidosUserController extends Controller
{
    public function index() {
      $user = Auth::user();
      $reservas['reservas'] = Reserva::where('usuario_id','=',$user->id)->get();
        return view("/normalUserViews/mispedidos",$reservas);
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
