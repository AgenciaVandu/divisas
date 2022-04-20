<?php

namespace Database\Seeders;

use App\Models\Divisa;
use Illuminate\Database\Seeder;

class DivisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisas = [
            [
            'name' => 'Dolar',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico2.png'
            ],
            [
            'name' => 'Euro',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico3.png'
            ],
            [
            'name' => 'Canadá',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico4.png'
            ],
            [
            'name' => 'Libra',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico5.png'
            ],
            [
            'name' => 'Suizo',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico6.png'
            ],
            [
            'name' => 'Belice',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico7.png'
            ],
            [
            'name' => 'Oro',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico10.png'
            ],
            [
            'name' => 'Plata',
            'compra' => '1.00',
            'venta' => '1.00',
            'description_compra' => 'Descripción de compra',
            'description_venta' => 'Descripción de venta',
            'icon' => 'ico9.png'
            ]
        ];

        foreach ($divisas as $divisa) {
            Divisa::create($divisa);
        }
    }
}
