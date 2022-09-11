<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;
use App\Models\Ciudad;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Records = [
            [ 'nombre' =>'Leticia', 'departamento_id'=>'1'],
            [ 'nombre' =>'Medellin', 'departamento_id'=>'2'],
            [ 'nombre' =>'Arauca', 'departamento_id'=>'3'],
            [ 'nombre' =>'Barranquilla', 'departamento_id'=>'4'],
            [ 'nombre' =>'Cartagena de Indias', 'departamento_id'=>'5'],
            [ 'nombre' =>'Tunja', 'departamento_id'=>'6'],
            [ 'nombre' =>'Manizales', 'departamento_id'=>'7'],
            [ 'nombre' =>'Florencia', 'departamento_id'=>'8'],
            [ 'nombre' =>'Yopal', 'departamento_id'=>'9'],
            [ 'nombre' =>'Popayan', 'departamento_id'=>'10'],
            [ 'nombre' =>'Valledupar', 'departamento_id'=>'11'],
            [ 'nombre' =>'Quibdó', 'departamento_id'=>'12'],
            [ 'nombre' =>'Bogotá', 'departamento_id'=>'13'],
            [ 'nombre' =>'San José del Guaviare', 'departamento_id'=>'14'],
            [ 'nombre' =>'Riohacha', 'departamento_id'=>'15'],
            [ 'nombre' =>'Santa Marta', 'departamento_id'=>'16'],
            [ 'nombre' =>'Villavicencio	', 'departamento_id'=>'17'],
            [ 'nombre' =>'Pasto', 'departamento_id'=>'18'],
            [ 'nombre' =>'Cúcuta', 'departamento_id'=>'19'],
            [ 'nombre' =>'Mocoa', 'departamento_id'=>'20'],
            [ 'nombre' =>'Armenia', 'departamento_id'=>'21'],
            [ 'nombre' =>'Pereira', 'departamento_id'=>'22'],
            [ 'nombre' =>'San Andrés', 'departamento_id'=>'23'],
            [ 'nombre' =>'Bucaramanga', 'departamento_id'=>'24'],
            [ 'nombre' =>'Sincelejo', 'departamento_id'=>'25'],
            [ 'nombre' =>'Ibagué', 'departamento_id'=>'26'],
            [ 'nombre' =>'Cali', 'departamento_id'=>'27'],
            [ 'nombre' =>'Mitú', 'departamento_id'=>'28'],
            [ 'nombre' =>'Puerto Carreño', 'departamento_id'=>'29'],
        ];
        Ciudad::insert($Records);
    }
}
