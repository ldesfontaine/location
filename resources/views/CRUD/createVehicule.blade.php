<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Ajouter un vehicule") }}
        </h2>
    </x-slot>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label for="marque">Nom</label>
            <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" name="marque" id="marque" placeholder="Marque">
        </div>
        <div class="form-group">
            <label for="modele">Prix_HT</label>
            <input type="number" class="form-control" name="Prix_HT" id="Prix_HT" placeholder="Prix_HT">
        </div>
        <div class="form-group">
            <label for="couleur">Couleur</label>
            <input type="text" class="form-control" name="couleur" id="couleur" placeholder="Couleur">
        </div>
        <div class="form-group">
            <label for="immatriculation">Immatriculation</label>
            <input type="text" class="form-control" name="immatriculation" id="immatriculation" placeholder="Immatriculation">
        </div>
        <div class="form-group">
            <label for="prix">Roue</label>
            <input type="number" class="form-control" name="Roue" id="Roue" placeholder="5">
        </div>
        <div class="form-group">
            <label for="prix">Place</label>
            <input type="number" class="form-control" name="Place" id="Place" placeholder="Place">
        </div>
        <div class="form-group">
            <label for="carburant">Carburant</label>
            <select class="form-control" name="carburant" id="carburant">
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Electrique">Electrique</option>
            </select>
        </div>
        <div class="form-group">
            <label for="boite_vitesse">Boite de vitesse</label>
            <select class="form-control" name="boite_vitesse" id="boite_vitesse">
                <option value="Manuelle">Manuelle</option>
                <option value="Automatique">Automatique</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description">
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="image" class="col-sm-2 col form-label">Image</label>
                <input type="file" class="form-control form-control-sm" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
            </div>
        </div>
        <div class="form-group">
            <label for="categorie">Categorie</label>
            <select class="form-control" name="categorie" id="categorie">
                <option value="1">Voiture</option>
                <option value="2">Moto</option>
                <option value="3">Camion</option>
                <option value="4">Camionnette</option>
                <option value="5">V??lo</option>
                <option value="6">Quad</option>
                <option value="7">Scooter</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>

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
</x-app-layout>
