<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         role::create([
                'nombre' => 'Aministrador',
                'descripcion' => 'Discover 125',
                'precio' => '5.000.000',
            ]);
    }
}
