<style>
    .form-group {
        margin-bottom: 1rem;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
</style>

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
            <select type="text" class="form-control" name="marque" id="marque">
                <option value="Acura">Acura</option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Aston Martin">Aston Martin</option>
                <option value="Audi">Audi</option>
                <option value="Bentley">Bentley</option>
                <option value="BMW">BMW</option>
                <option value="Bugatti">Bugatti</option>
                <option value="Cadillac">Cadillac</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chery">Chery</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroën">Citroën</option>
                <option value="Dacia">Dacia</option>
                <option value="Daewoo">Daewoo</option>
                <option value="Dodge">Dodge</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Geely">Geely</option>
                <option value="GMC">GMC</option>
                <option value="Honda">Honda</option>
                <option value="Hummer">Hummer</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Infiniti">Infiniti</option>
                <option value="Isuzu">Isuzu</option>
                <option value="JAC Motors">JAC Motors</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Jeep">Jeep</option>
                <option value="Kawasaki">Kawasaki</option>
                <option value="Kia">Kia</option>
                <option value="Koenigsegg">Koenigsegg</option>
                <option value="Lamborghini">Lamborghini</option>
                <option value="Lancia">Lancia</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Lexus">Lexus</option>
                <option value="Lincoln">Lincoln</option>
                <option value="Lotus">Lotus</option>
                <option value="Mahindra">Mahindra</option>
                <option value="Maserati">Maserati</option>
                <option value="Maybach">Maybach</option>
                <option value="Mazda">Mazda</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="MG">MG</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Opel">Opel</option>
                <option value="Pagani">Pagani</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Pontiac">Pontiac</option>
                <option value="Porsche">Porsche</option>
                <option value="Proton">Proton</option>
                <option value="Renault">Renault</option>
                <option value="Rolls-Royce">Rolls-Royce</option>
                <option value="Rover">Rover</option>
                <option value="Smart">Smart</option>
                <option value="Subaru">Subaru</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Tesla">Tesla</option>
                <option value="Toyota">Toyota</option>
                <option value="Vauxhall">Vauxhall</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>
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
                <option value="5">Vélo</option>
                <option value="6">Quad</option>
                <option value="7">Scooter</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date_premiere_mise_en_circulation">Date de première mise en circulation</label>
            <input type="date" class="form-control" name="date_premiere_mise_en_circulation" id="date_premiere_mise_en_circulation" placeholder="date_premiere_mise_en_circulation">
        </div>
        <div class="form-group">
            <label for="date_rentrée_au_garage">Date de rentrée au garage</label>
            <input type="date" class="form-control" name="date_rentrée_au_garage" id="date_rentrée_au_garage" placeholder="date_rentrée_au_garage">
        </div>
        <div class="form-group">
            <label for="nombre_chevaux_fiscaux">Nombre de chevaux fiscaux</label>
            <input type="number" class="form-control" name="nombre_chevaux_fiscaux" id="nombre_chevaux_fiscaux" placeholder="nombre_chevaux_fiscaux">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
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
