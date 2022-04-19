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
            ],
            [
            'name' => 'Euro',
            'compra' => '1.00',
            'venta' => '1.00',
            ],
            [
            'name' => 'Canadá',
            'compra' => '1.00',
            'venta' => '1.00',
            ],
            [
            'name' => 'Libra',
            'compra' => '1.00',
            'venta' => '1.00',
            ],
            [
            'name' => 'Suizo',
            'compra' => '1.00',
            'venta' => '1.00',
            ],
            [
            'name' => 'Belice',
            'compra' => '1.00',
            'venta' => '1.00',
            ],
            [
            'name' => 'Oro',
            'compra' => '1.00',
            'venta' => '1.00',
            ],
            [
            'name' => 'Plata',
            'compra' => '1.00',
            'venta' => '1.00',
            ]
        ];

        foreach ($divisas as $divisa) {
            Divisa::create($divisa);
        }
    }
}
