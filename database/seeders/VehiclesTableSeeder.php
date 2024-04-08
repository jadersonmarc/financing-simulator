<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'photo' => 'https://cdn.motor1.com/images/mgl/7ZerpA/s1/vw-tcross-170tsi-1.jpg',
                'city' => 'Cidade Exemplo 1',
                'brand' => 'Volkswagen T-Cross',
                'model' => '170 TSi ',
                'description' => 'Descrição Exemplo 1',
                'year' => 2020,
                'mileage' => 15000,
                'transmission_type' => 'Automático',
                'store_phone' => '11 99999-9999',
                'price' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'photo' => 'https://cdn.motor1.com/images/mgl/mMEQ8j/s3/2024-honda-civic-rs-jdm.jpg',
                'city' => 'Cidade Exemplo 2',
                'brand' => 'Honda Civic',
                'model' => 'Sport',
                'description' => 'Descrição Exemplo 2',
                'year' => 2018,
                'mileage' => 30000,
                'transmission_type' => 'Manual',
                'store_phone' => '22 88888-8888',
                'price' => 45000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Adicione mais veículos conforme necessário
        ]);
    }
}
