<?php

use Illuminate\Database\Seeder;
use App\Unidad_Medida;

class UnidadmedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidad_Medida::create([
            'nombre'=>"Kilo"
            
        ]);
   
        Unidad_Medida::create([
           'nombre'=>"Atado"
           
       ]);
       Unidad_Medida::create([
           'nombre'=>"Panal"
           
       ]);
       Unidad_Medida::create([
        'nombre'=>"Litros"
        
    ]);
    }
}
