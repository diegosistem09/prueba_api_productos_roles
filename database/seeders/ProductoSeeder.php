<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        Producto::create([
                'Producto' => 'Moto',
                'descripcion' => 'Discover 125',
                'precio' => '5.000.000',
            ]);
    }
}
