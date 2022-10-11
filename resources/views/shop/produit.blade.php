@extends('shop')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$produit->nom}}</li>
    </ol>
</nav>

<main role="main">


    <div class="container">

        <div class="row justify-content-between">

            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('produits/'.$produit->photo_principal)}}" alt="Card image cap">

                </div>
            </div>
            <div class="col-6">

                <h1 class="jumbotron-heading">{{$produit->nom}}</h1>
                <h5>{{$produit->prix_ht}}€</h5>
                <p class="lead text-muted">{{$produit->description}}</p>

            </div>
        </div>
    </div>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h3>Vous aimerez aussi :</h3>
        </div>
        <div class="row">
            @foreach ($produits ->shuffle() ->take(3) as $produit)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('produits/'.$produit->photo_principal)}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$produit->nom}} <br>{{$produit->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">{{$produit->prix_ht}}€</span>
                            <a href="{{ route('voir_plus',['id'=>$produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
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
