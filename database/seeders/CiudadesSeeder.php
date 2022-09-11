<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;
use App\Models\Ciudad;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Records = [
            [ 'nombre'=>'Amazonas'],
            [ 'nombre'=>'Antioquia'],
            [ 'nombre'=>'Arauca'],
            [ 'nombre'=>'Atlantico'],
            [ 'nombre'=>'Bolivar'],
            [ 'nombre'=>'Boyaca'],
            [ 'nombre'=>'Caldas'],
            [ 'nombre'=>'Caqueta'],
            [ 'nombre'=>'Casanare'],
            [ 'nombre'=>'Cauca'],
            [ 'nombre'=>'Cesar'],
            [ 'nombre'=>'Choco'],
            [ 'nombre'=>'Cundinamarca'],
            [ 'nombre'=>'Guaviare'],
            [ 'nombre'=>'La Guajira'],
            [ 'nombre'=>'Magdalena'],
            [ 'nombre'=>'Meta'],
            [ 'nombre'=>'Nariño'],
            [ 'nombre'=>'Norte de Santander'],
            [ 'nombre'=>'Putumayo'],
            [ 'nombre'=>'Quindio'],
            [ 'nombre'=>'Risaralda'],
            [ 'nombre'=>'San andres y providencia'],
            [ 'nombre'=>'Santander'],
            [ 'nombre'=>'Sucre'],
            [ 'nombre'=>'Tolima'],
            [ 'nombre'=>'Valle del Cauca'],
            [ 'nombre'=>'Vaupes'],
            [ 'nombre'=>'Vichada'],
        ];
        Departamento::insert($Records);
    }
}
