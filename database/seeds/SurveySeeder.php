<?php

use Illuminate\Database\Seeder;
use App\Survey;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::create([
            'name' => 'store1'
        ]);
        Survey::create([
            'name' => 'store2'
        ]);
        Survey::create([
            'name' => 'store3'
        ]);
    }
}
