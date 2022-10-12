@extends('shop')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$vehicule->type->nom}}</li>
        <li class="breadcrumb-item active" aria-current="page">{{$vehicule->nom}}</li>
    </ol>
</nav>

<main role="main">


    <div class="container">

        <div class="row justify-content-between">

            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('produits/'.$vehicule->photo_principal)}}" alt="Card image cap">
                </div>
                <p class="lead text-muted">{{$vehicule->description}}</p>
            </div>
            <div class="col-6">

                <h1 class="jumbotron-heading">{{$vehicule->nom}} -- {{$vehicule->prix_ht}}€</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Caractéristique</th>
                            <th scope="col">{{$vehicule->type->nom}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Carburant</th>
                            <td>{{$vehicule->carburant}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Boite de vitesse</th>
                            <td>{{$vehicule->boite_vitesse}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Couleur</th>
                            <td>{{$vehicule->couleur}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Places</th>
                            <td>{{$vehicule->places}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Roues</th>
                            <td>{{$vehicule->roues}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Imatriculation</th>
                            <td>{{$vehicule->plaque}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h3>Vous aimerez aussi :</h3>
        </div>
        <div class="row">
            @foreach ($vehicules ->shuffle($vehicule->id) ->take(3) as $vehicule)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('produits/'.$vehicule->photo_principal)}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$vehicule->nom}} <br>{{$vehicule->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">{{$vehicule->prix_ht}}€</span>
                            <a href="{{ route('voir_plus',['id'=>$vehicule->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</main>


@endsection
