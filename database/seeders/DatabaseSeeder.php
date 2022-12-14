<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DepartamentosSeeder;
use Database\Seeders\CiudadesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        $this->call(CiudadesSeeder::class);
        $this->call(DepartamentosSeeder::class);
    }
}
