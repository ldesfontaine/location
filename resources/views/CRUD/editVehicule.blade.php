<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Modifier le vehicule") }}
        </h2>
    </x-slot>

<div class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="" method="POST" enctype="multipart/form-data">
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
            <div class="col-sm-4">
                <label for="image" class="col-sm-2 col form-label">Image</label>
                <input type="file" class="form-control form-control-sm" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
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
        <button type="submit" class="btn btn-primary">Modifier</button>

    </div>
</x-app-layout>

