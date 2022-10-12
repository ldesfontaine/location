@extends('shop')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categorie</li>
    </ol>
</nav>

<div class="row">
@foreach ($vehicules as $vehicule)
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
        <img class="card-img-top"src="{{asset('produits/'. $vehicule->photo_principal)}}" alt="Card image cap">
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







@endsection
