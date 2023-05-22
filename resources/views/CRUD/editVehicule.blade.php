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
            {{ __("Modifier le vehicule") }}
        </h2>
    </x-slot>

    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="marque">Nom</label>
                <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom"
                       value='{{$vehicule->nom}}'>
            </div>
            <div class="form-group">
                <label for="marque">Marque</label>
                <select type="text" class="form-control" name="marque" id="marque" value='{{$vehicule->marque}}'>
                    <option value="Acura" <?php if ($marqueVehicule === 'Acura') echo 'selected'; ?>>Acura</option>
                    <option value="Alfa Romeo" <?php if ($marqueVehicule === 'Alfa Romeo') echo 'selected'; ?>>Alfa Romeo</option>
                    <option value="Aston Martin" <?php if ($marqueVehicule === 'Aston Martin') echo 'selected'; ?>>Aston Martin</option>
                    <option value="Audi" <?php if ($marqueVehicule === 'Audi') echo 'selected'; ?>>Audi</option>
                    <option value="Bentley" <?php if ($marqueVehicule === 'Bentley') echo 'selected'; ?>>Bentley</option>
                    <option value="BMW" <?php if ($marqueVehicule === 'BMW') echo 'selected'; ?>>BMW</option>
                    <option value="Bugatti" <?php if ($marqueVehicule === 'Bugatti') echo 'selected'; ?>>Bugatti</option>
                    <option value="Cadillac" <?php if ($marqueVehicule === 'Cadillac') echo 'selected'; ?>>Cadillac</option>
                    <option value="Chevrolet" <?php if ($marqueVehicule === 'Chevrolet') echo 'selected'; ?>>Chevrolet</option>
                    <option value="Chery" <?php if ($marqueVehicule === 'Chery') echo 'selected'; ?>>Chery</option>
                    <option value="Chrysler" <?php if ($marqueVehicule === 'Chrysler') echo 'selected'; ?>>Chrysler</option>
                    <option value="Citroën" <?php if ($marqueVehicule === 'Citroën') echo 'selected'; ?>>Citroën</option>
                    <option value="Dacia" <?php if ($marqueVehicule === 'Dacia') echo 'selected'; ?>>Dacia</option>
                    <option value="Daewoo" <?php if ($marqueVehicule === 'Daewoo') echo 'selected'; ?>>Daewoo</option>
                    <option value="Dodge" <?php if ($marqueVehicule === 'Dodge') echo 'selected'; ?>>Dodge</option>
                    <option value="Ferrari" <?php if ($marqueVehicule === 'Ferrari') echo 'selected'; ?>>Ferrari</option>
                    <option value="Fiat" <?php if ($marqueVehicule === 'Fiat') echo 'selected'; ?>>Fiat</option>
                    <option value="Ford" <?php if ($marqueVehicule === 'Ford') echo 'selected'; ?>>Ford</option>
                    <option value="Geely" <?php if ($marqueVehicule === 'Geely') echo 'selected'; ?>>Geely</option>
                    <option value="GMC" <?php if ($marqueVehicule === 'GMC') echo 'selected'; ?>>GMC</option>
                    <option value="Honda" <?php if ($marqueVehicule === 'Honda') echo 'selected'; ?>>Honda</option>
                    <option value="Hummer" <?php if ($marqueVehicule === 'Hummer') echo 'selected'; ?>>Hummer</option>
                    <option value="Hyundai" <?php if ($marqueVehicule === 'Hyundai') echo 'selected'; ?>>Hyundai</option>
                    <option value="Infiniti" <?php if ($marqueVehicule === 'Infiniti') echo 'selected'; ?>>Infiniti</option>
                    <option value="Isuzu" <?php if ($marqueVehicule === 'Isuzu') echo 'selected'; ?>>Isuzu</option>
                    <option value="JAC Motors" <?php if ($marqueVehicule === 'JAC Motors') echo 'selected'; ?>>JAC Motors</option>
                    <option value="Jaguar" <?php if ($marqueVehicule === 'Jaguar') echo 'selected'; ?>>Jaguar</option>
                    <option value="Jeep" <?php if ($marqueVehicule === 'Jeep') echo 'selected'; ?>>Jeep</option>
                    <option value="Kawasaki" <?php if ($marqueVehicule === 'Kawasaki') echo 'selected'; ?>>Kawasaki</option>
                    <option value="Kia" <?php if ($marqueVehicule === 'Kia') echo 'selected'; ?>>Kia</option>
                    <option value="Koenigsegg" <?php if ($marqueVehicule === 'Koenigsegg') echo 'selected'; ?>>Koenigsegg</option>
                    <option value="Lamborghini" <?php if ($marqueVehicule === 'Lamborghini') echo 'selected'; ?>>Lamborghini</option>
                    <option value="Lancia" <?php if ($marqueVehicule === 'Lancia') echo 'selected'; ?>>Lancia</option>
                    <option value="Land Rover" <?php if ($marqueVehicule === 'Land Rover') echo 'selected'; ?>>Land Rover</option>
                    <option value="Lexus" <?php if ($marqueVehicule === 'Lexus') echo 'selected'; ?>>Lexus</option>
                    <option value="Lincoln" <?php if ($marqueVehicule === 'Lincoln') echo 'selected'; ?>>Lincoln</option>
                    <option value="Lotus" <?php if ($marqueVehicule === 'Lotus') echo 'selected'; ?>>Lotus</option>
                    <option value="Mahindra" <?php if ($marqueVehicule === 'Mahindra') echo 'selected'; ?>>Mahindra</option>
                    <option value="Maserati" <?php if ($marqueVehicule === 'Maserati') echo 'selected'; ?>>Maserati</option>
                    <option value="Maybach" <?php if ($marqueVehicule === 'Maybach') echo 'selected'; ?>>Maybach</option>
                    <option value="Mazda" <?php if ($marqueVehicule === 'Mazda') echo 'selected'; ?>>Mazda</option>
                    <option value="Mercedes-Benz" <?php if ($marqueVehicule === 'Mercedes-Benz') echo 'selected'; ?>>Mercedes-Benz</option>
                    <option value="MG" <?php if ($marqueVehicule === 'MG') echo 'selected'; ?>>MG</option>
                    <option value="Mini" <?php if ($marqueVehicule === 'Mini') echo 'selected'; ?>>Mini</option>
                    <option value="Mitsubishi" <?php if ($marqueVehicule === 'Mitsubishi') echo 'selected'; ?>>Mitsubishi</option>
                    <option value="Opel" <?php if ($marqueVehicule === 'Opel') echo 'selected'; ?>>Opel</option>
                    <option value="Nissan" <?php if ($marqueVehicule === 'Nissan') echo 'selected'; ?>>Nissan</option>
                    <option value="Tesla" <?php if ($marqueVehicule === 'Tesla') echo 'selected'; ?>>Tesla</option>
                    <option value="Porsche" <?php if ($marqueVehicule === 'Porsche') echo 'selected'; ?>>Porsche</option>
                    <option value="Ford" <?php if ($marqueVehicule === 'Ford') echo 'selected'; ?>>Ford</option>
                    <option value="Wolsvagen" <?php if ($marqueVehicule === 'Wolsvagen') echo 'selected'; ?>>Wolsvagen</option>
                    <option value="Renault" <?php if ($marqueVehicule === 'Renault') echo 'selected'; ?>>Renault</option>
                    <option value="Mercedess" <?php if ($marqueVehicule === 'Mercedess') echo 'selected'; ?>>Mercedess</option>
                    <option value="Chevrolet" <?php if ($marqueVehicule === 'Chevrolet') echo 'selected'; ?>>Chevrolet</option>
                    <option value="Yamaha" <?php if ($marqueVehicule === 'Yamaha') echo 'selected'; ?>>Yamaha</option>
                    <option value="Kawasaki" <?php if ($marqueVehicule === 'Kawasaki') echo 'selected'; ?>>Kawasaki</option>
                    <option value="Triumph" <?php if ($marqueVehicule === 'Triumph') echo 'selected'; ?>>Triumph</option>
                    <option value="Ducati" <?php if ($marqueVehicule === 'Ducati') echo 'selected'; ?>>Ducati</option>
                </select>
            </div>
            <div class="form-group">
                <label for="modele">Prix_HT</label>
                <input type="number" class="form-control" name="Prix_HT" id="Prix_HT" placeholder="Prix_HT"
                       value='{{$vehicule->prix_ht}}'>
            </div>
            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input type="text" class="form-control" name="couleur" id="couleur" placeholder="Couleur"
                       value='{{$vehicule->couleur}}'>
            </div>
            <div class="form-group">
                <label for="immatriculation">Immatriculation</label>
                <input type="text" class="form-control" name="immatriculation" id="immatriculation"
                       placeholder="Immatriculation" value='{{$vehicule->plaque}}'>
            </div>
            <div class="form-group">
                <label for="prix">Roue</label>
                <input type="number" class="form-control" name="Roue" id="Roue" placeholder="5"
                       value='{{$vehicule->roues}}'>
            </div>
            <div class="form-group">
                <label for="prix">Place</label>
                <input type="number" class="form-control" name="Place" id="Place" placeholder="Place"
                       value='{{$vehicule->places}}'>
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
                <select class="form-control" name="boite_vitesse" id="boite_vitesse"
                        value='{{$vehicule->boite_vitesse}}'>
                    <option value="Manuelle">Manuelle</option>
                    <option value="Automatique">Automatique</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description"
                       value='{{$vehicule->description}}'>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="image" class="col-sm-2 col form-label">Image</label>
                    <input type="file" class="form-control form-control-sm" id="image" name="image"
                           accept="image/png, image/jpeg, image/jpg">
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
            <div class="form-group">
                <label for="date_premiere_mise_en_circulation">Date de première mise en circulation</label>
                <input type="date" class="form-control" name="date_premiere_mise_en_circulation"
                       id="date_premiere_mise_en_circulation" placeholder="date_premiere_mise_en_circulation"
                       value='{{$vehicule->date_premiere_mise_en_circulation}}'>
            </div>
            <div class="form-group">
                <label for="date_rentrée_au_garage">Date de rentrée au garage</label>
                <input type="date" class="form-control" name="date_rentrée_au_garage" id="date_rentrée_au_garage"
                       placeholder="date_rentrée_au_garage" value='{{$vehicule->date_rentrée_au_garage}}'>
            </div>
            <div class="form-group">
                <label for="nombre_chevaux_fiscaux">Nombre de chevaux fiscaux</label>
                <input type="number" class="form-control" name="nombre_chevaux_fiscaux" id="nombre_chevaux_fiscaux"
                       placeholder="nombre_chevaux_fiscaux" value='{{$vehicule->nombre_chevaux_fiscaux}}'>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>

        </form>
    </div>

    </div>
</x-app-layout>
