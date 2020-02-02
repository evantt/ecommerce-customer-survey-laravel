<?php

use Illuminate\Database\Seeder;
use\App\Shipment;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipment::create([
            'service' => 'JNE'
        ]);
        Shipment::create([
            'service' => 'JNT'
        ]);
        Shipment::create([
            'service' => 'TIKI'
        ]);
        Shipment::create([
            'service' => 'Pos Indonesia'
        ]);
        Shipment::create([
            'service' => 'Si Cepat'
        ]);
        Shipment::create([
            'service' => 'GOSEND'
        ]);
        Shipment::create([
            'service' => 'Other'
        ]);
    }
}
