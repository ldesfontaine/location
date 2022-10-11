<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit= new \App\Models\Produit();
        $produit->nom = 'Nissan Skyline';
        $produit->prix_ht = 485000;
        $produit->description = 'Nissan Skyline R34 GTR V-Spec II Nür';
        $produit->photo_principal = 'skyline.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'Tesla Model 3';
        $produit->prix_ht = 66490;
        $produit->description = 'La Model 3 est conçue pour offrir d\'excellentes performances électriques. Elle bénéficie d\'une accélération rapide, d\'une grande autonomie';
        $produit->photo_principal = 'tesla.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'Porsche 911';
        $produit->prix_ht = 150000;
        $produit->description = 'La Porsche 911 est une automobile sportive de la marque allemande Porsche. Elle est produite depuis 1963 et est la voiture la plus vendue de l\'histoire de Porsche';
        $produit->photo_principal = 'porsche.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'Ford Mustang';
        $produit->prix_ht = 50000;
        $produit->description = 'La Ford Mustang est une automobile sportive produite par le constructeur américain Ford depuis 1964. Elle est dérivée de la Ford Falcon, un modèle de la gamme Ford';
        $produit->photo_principal = 'mustang.jpg';
        $produit->save();


        $produit= new \App\Models\Produit();
        $produit->nom = 'Wolsvagen Golf';
        $produit->prix_ht = 30000;
        $produit->description = 'La Volkswagen Golf est une automobile compacte produite par le constructeur automobile allemand Volkswagen depuis 1974. Elle est dérivée de la Volkswagen Rabbit';
        $produit->photo_principal = 'golf.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'Clio 4';
        $produit->prix_ht = 20000;
        $produit->description = 'La Renault Clio est une automobile compacte produite par le constructeur automobile français Renault depuis 1990. Elle est dérivée de la Renault 5';
        $produit->photo_principal = 'clio.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'Mercedess Classe C';
        $produit->prix_ht = 50000;
        $produit->description = 'La Mercedes-Benz Classe C est une automobile compacte produite par le constructeur automobile allemand Mercedes-Benz depuis 1993. Elle est dérivée de la Mercedes-Benz Classe E';
        $produit->photo_principal = 'classeC.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'Chevrolet Camaro';
        $produit->prix_ht = 90000;
        $produit->description = 'La Chevrolet Camaro est une automobile sportive produite par le constructeur automobile américain Chevrolet depuis 1966. Elle est dérivée de la Chevrolet Corvair';
        $produit->photo_principal = 'camaro.jpg';
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = 'BMW M3';
        $produit->prix_ht = 100000;
        $produit->description = 'La BMW M3 est une automobile sportive produite par le constructeur automobile allemand BMW depuis 1986. Elle est dérivée de la BMW 3 Series';
        $produit->photo_principal = 'bmw.jpeg';
        $produit->save();

    }
}
