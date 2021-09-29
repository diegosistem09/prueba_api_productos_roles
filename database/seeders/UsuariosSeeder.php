<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Usuario::create([
                'nombre' => 'Admin@gmail.com',
                'contrasena' => 'Administrador123',
                
            ]);    }
}
