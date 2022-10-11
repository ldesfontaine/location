@extends('home')
@section('content')
    <div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
        @foreach ($produits as $produit)
        {{-- {{dump($produits)}} --}}
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
            <img class="card-img-top"src="{{asset('produits/'. $produit->photo_principal)}}" alt="Card image cap">
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
@endsection
