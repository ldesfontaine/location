<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Seeder;

class VehiculesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicule= new Vehicule();
        $vehicule->nom = 'Nissan Skyline';
        $vehicule->marque = 'Nissan';
        $vehicule->prix_ht = 485000;
        $vehicule->description = 'Nissan Skyline R34 GTR V-Spec II Nür';
        $vehicule->photo_principal = 'skyline.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Blanc';
        $vehicule->plaque = 'AB-123-CD';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Tesla Model 3';
        $vehicule->marque = 'Tesla';
        $vehicule->prix_ht = 66490;
        $vehicule->description = 'La Model 3 est conçue pour offrir d\'excellentes performances électriques. Elle bénéficie d\'une accélération rapide, d\'une grande autonomie';
        $vehicule->photo_principal = 'tesla.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 5;
        $vehicule->carburant = 'Electrique';
        $vehicule->boite_vitesse = 'Automatique';
        $vehicule->couleur = 'Blanc';
        $vehicule->plaque = 'CD-456-EF';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Porsche 911';
        $vehicule->marque = 'Porsche';
        $vehicule->prix_ht = 150000;
        $vehicule->description = 'La Porsche 911 est une automobile sportive de la marque allemande Porsche. Elle est produite depuis 1963 et est la voiture la plus vendue de l\'histoire de Porsche';
        $vehicule->photo_principal = 'porsche.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Gris';
        $vehicule->plaque = 'HJ-789-IK';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Ford Mustang';
        $vehicule->marque = 'Ford';
        $vehicule->prix_ht = 50000;
        $vehicule->description = 'La Ford Mustang est une automobile sportive produite par le constructeur américain Ford depuis 1964. Elle est dérivée de la Ford Falcon, un modèle de la gamme Ford';
        $vehicule->photo_principal = 'mustang.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 2;
        $vehicule->carburant = 'Diesel';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Noir';
        $vehicule->plaque = 'BF-123-CD';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();


        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Wolsvagen Golf';
        $vehicule->marque = 'Wolsvagen';
        $vehicule->prix_ht = 30000;
        $vehicule->description = 'La Volkswagen Golf est une automobile compacte produite par le constructeur automobile allemand Volkswagen depuis 1974. Elle est dérivée de la Volkswagen Rabbit';
        $vehicule->photo_principal = 'golf.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 5;
        $vehicule->carburant = 'Diesel';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Gris';
        $vehicule->plaque = 'OD-258-EF';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Clio 4';
        $vehicule->marque = 'Renault';
        $vehicule->prix_ht = 20000;
        $vehicule->description = 'La Renault Clio est une automobile compacte produite par le constructeur automobile français Renault depuis 1990. Elle est dérivée de la Renault 5';
        $vehicule->photo_principal = 'clio.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 5;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Jaune';
        $vehicule->plaque = 'GH-456-IK';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Mercedess Classe C';
        $vehicule->marque = 'Mercedess';
        $vehicule->prix_ht = 50000;
        $vehicule->description = 'La Mercedes-Benz Classe C est une automobile compacte produite par le constructeur automobile allemand Mercedes-Benz depuis 1993. Elle est dérivée de la Mercedes-Benz Classe E';
        $vehicule->photo_principal = 'classeC.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 5;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Noir';
        $vehicule->plaque = 'JK-789-LM';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Chevrolet Camaro';
        $vehicule->marque = 'Chevrolet';
        $vehicule->prix_ht = 90000;
        $vehicule->description = 'La Chevrolet Camaro est une automobile sportive produite par le constructeur automobile américain Chevrolet depuis 1966. Elle est dérivée de la Chevrolet Corvair';
        $vehicule->photo_principal = 'camaro.jpg';
        $vehicule->roues = 4;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Noir';
        $vehicule->plaque = 'NO-123-OP';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'BMW M3';
        $vehicule->marque = 'BMW';
        $vehicule->prix_ht = 100000;
        $vehicule->description = 'La BMW M3 est une automobile sportive produite par le constructeur automobile allemand BMW depuis 1986. Elle est dérivée de la BMW 3 Series';
        $vehicule->photo_principal = 'bmw.jpeg';
        $vehicule->roues = 4;
        $vehicule->places = 2;
        $vehicule->carburant = 'Diesel';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Noir';
        $vehicule->plaque = 'GG-175-KM';
        $vehicule->type_id = 1;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();


        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'MT-07';
        $vehicule->marque = 'Yamaha';
        $vehicule->prix_ht = 10000;
        $vehicule->description = 'La Yamaha MT-07 est une moto sportive produite par le constructeur japonais Yamaha depuis 2014. Elle est dérivée de la Yamaha FZ-07';
        $vehicule->photo_principal = 'mt07.jpg';
        $vehicule->roues = 2;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Noir';
        $vehicule->plaque = 'GH-456-IK';
        $vehicule->type_id = 2;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'S1000 RR';
        $vehicule->marque = 'BMW';
        $vehicule->prix_ht = 20000;
        $vehicule->description = 'La BMW S1000 RR est une moto sportive produite par le constructeur allemand BMW Motorrad depuis 2009. Elle est dérivée de la BMW S1000 R';
        $vehicule->photo_principal = 's1000RR.jpg';
        $vehicule->roues = 2;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Rouge';
        $vehicule->plaque = 'GX-469-VK';
        $vehicule->type_id = 2;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'YZF-R7';
        $vehicule->marque = 'Yamaha';
        $vehicule->prix_ht = 15000;
        $vehicule->description = 'La Yamaha YZF-R7 est une moto sportive produite par le constructeur japonais Yamaha depuis 1999. Elle est dérivée de la Yamaha YZF-R6';
        $vehicule->photo_principal = 'YZF-R7.jpg';
        $vehicule->roues = 2;
        $vehicule->places = 2;
        $vehicule->carburant = 'Diesel';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Noir';
        $vehicule->plaque = 'HU-422-PK';
        $vehicule->type_id = 2;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'ZX-10R';
        $vehicule->marque = 'Kawasaki';
        $vehicule->prix_ht = 20000;
        $vehicule->description = 'La Kawasaki ZX-10R est une moto sportive produite par le constructeur japonais Kawasaki depuis 2004. Elle est dérivée de la Kawasaki ZX-9R';
        $vehicule->photo_principal = 'ZX-10R.jpg';
        $vehicule->roues = 2;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Vert';
        $vehicule->plaque = 'JH-456-OK';
        $vehicule->type_id = 2;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Trident 660';
        $vehicule->marque = 'Triumph';
        $vehicule->prix_ht = 15000;
        $vehicule->description = 'La Triumph Trident 660 est une moto sportive produite par le constructeur britannique Triumph depuis 1991. Elle est dérivée de la Triumph Trident 650';
        $vehicule->photo_principal = '660trident.jpg';
        $vehicule->roues = 2;
        $vehicule->places = 2;
        $vehicule->carburant = 'Diesel';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Orange';
        $vehicule->plaque = 'ZO-594-FJ';
        $vehicule->type_id = 2;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

        $vehicule= new \App\Models\Vehicule();
        $vehicule->nom = 'Diavel 1260';
        $vehicule->marque = 'Ducati';
        $vehicule->prix_ht = 20000;
        $vehicule->description = 'La Ducati Diavel 1260 est une moto sportive produite par le constructeur italien Ducati depuis 2011. Elle est dérivée de la Ducati Diavel';
        $vehicule->photo_principal = 'diavel.jpg';
        $vehicule->roues = 2;
        $vehicule->places = 2;
        $vehicule->carburant = 'Essence';
        $vehicule->boite_vitesse = 'Manuelle';
        $vehicule->couleur = 'Gris';
        $vehicule->plaque = 'SI-485-IS';
        $vehicule->type_id = 2;
        $vehicule->date_premiere_mise_en_circulation = '2002-01-01';
        $vehicule->date_rentrée_au_garage = '2021-01-01';
        $vehicule->nombre_chevaux_fiscaux = 300;
        $vehicule->save();

    }
}
