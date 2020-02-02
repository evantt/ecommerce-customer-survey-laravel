<?php

use Illuminate\Database\Seeder;
use\App\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'method' => 'Cash On Delivery (COD)'
        ]);
        Payment::create([
            'method' => 'Transfer Rekening'
        ]);
        Payment::create([
            'method' => 'Credit Card'
        ]);
        Payment::create([
            'method' => 'Rekening Bersama (Rekber)'
        ]);
        Payment::create([
            'method' => 'Indomaret'
        ]);
        Payment::create([
            'method' => 'Paypal'
        ]);
    }
}
