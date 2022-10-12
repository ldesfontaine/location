<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = new Type();
        $types->nom = 'Voiture';
        $types->actif = true;
        $types->save();

        $types = new \App\Models\Type();
        $types->nom = 'Moto';
        $types->actif = true;
        $types->save();

        $types = new \App\Models\Type();
        $types->nom = 'Camion';
        $types->actif = false;
        $types->save();

        $types = new \App\Models\Type();
        $types->nom = 'Camionnette';
        $types->actif = false;
        $types->save();

        $types = new \App\Models\Type();
        $types->nom = 'Vélo';
        $types->actif = false;
        $types->save();

        $types = new \App\Models\Type();
        $types->nom = 'Quad';
        $types->actif = false;
        $types->save();

        $types = new \App\Models\Type();
        $types->nom = 'Scooter';
        $types->actif = false;
        $types->save();

    }
}
