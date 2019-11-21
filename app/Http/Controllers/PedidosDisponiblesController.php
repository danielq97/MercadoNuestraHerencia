<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;

class PedidosDisponiblesController extends Controller
{
    public function index() {
        $reservas['reservas'] = Reserva::paginate(12);
        return view('/adminViews/pedidosDisponibles', $reservas);
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
