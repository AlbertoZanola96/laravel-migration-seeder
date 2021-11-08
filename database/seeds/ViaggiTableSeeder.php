<?php

use Illuminate\Database\Seeder;
use App\Viaggio;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_viaggio = new Viaggio();
        $new_viaggio->city= 'Milano';
        $new_viaggio->state = 'Italia';
        $new_viaggio->address = 'Via Montenapoleone';
        $new_viaggio->night = 3;
        $new_viaggio->description = 'text';
        $new_viaggio->price = 120;
        $new_viaggio->save();
    }
}
