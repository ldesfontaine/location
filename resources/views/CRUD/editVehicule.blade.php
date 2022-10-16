@extends('shop')
@section('content')

<div class="container">
        <h1>Ajouter un vehicule</h1>
        <form action="" method="POST">
            @csrf
        <div class="form-group">
            <label for="marque">Nom</label>
            <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom" value='{{$vehicule->nom}}'>
        </div>
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" name="marque" id="marque" placeholder="Marque" value='{{$vehicule->marque}}'>
        </div>
        <div class="form-group">
            <label for="modele">Prix_HT</label>
            <input type="number" class="form-control" name="Prix_HT" id="Prix_HT" placeholder="Prix_HT" value='{{$vehicule->prix_ht}}'>
        </div>
        <div class="form-group">
            <label for="couleur">Couleur</label>
            <input type="text" class="form-control" name="couleur" id="couleur" placeholder="Couleur" value='{{$vehicule->couleur}}'>
        </div>
        <div class="form-group">
            <label for="immatriculation">Immatriculation</label>
            <input type="text" class="form-control" name="immatriculation" id="immatriculation" placeholder="Immatriculation" value='{{$vehicule->plaque}}'>
        </div>
        <div class="form-group">
            <label for="prix">Roue</label>
            <input type="number" class="form-control" name="Roue" id="Roue" placeholder="5" value='{{$vehicule->roues}}'>
        </div>
        <div class="form-group">
            <label for="prix">Place</label>
            <input type="number" class="form-control" name="Place" id="Place" placeholder="Place" value='{{$vehicule->places}}'>
        </div>
        <div class="form-group">
            <label for="carburant">Carburant</label>
            <select class="form-control" name="carburant" id="carburant" value='{{$vehicule->carburant}}'>
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Electrique">Electrique</option>
            </select>
        </div>
        <div class="form-group">
            <label for="boite_vitesse">Boite de vitesse</label>
            <select class="form-control" name="boite_vitesse" id="boite_vitesse" value='{{$vehicule->boite_vitesse}}'>
                <option value="Manuelle">Manuelle</option>
                <option value="Automatique">Automatique</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value='{{$vehicule->description}}'>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image = lien de l'image" value='{{$vehicule->photo_principal}}'>
        </div>
        <div class="form-group">
            <label for="categorie">Categorie</label>
            <select class="form-control" name="categorie" id="categorie" value='{{$vehicule->type_id}}'>
                <option value="1">Voiture</option>
                <option value="2">Moto</option>
                <option value="3">Camion</option>
                <option value="4">Camionnette</option>
                <option value="5">Vélo</option>
                <option value="6">Quad</option>
                <option value="7">Scooter</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>

    </div>
@endsection
