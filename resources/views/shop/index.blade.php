@extends('home')
@section('content')
    <div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            @foreach ($vehicules->shuffle(1) as $vehicule)
            {{-- {{dd($vehicules)}} --}}
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top"src="{{asset('vehicule/'. $vehicule->photo_principal)}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$vehicule->nom}} <br>{{$vehicule->description}}</p>
                        <a href="{{route('voir_type_categorie',['id'=>$vehicule->type->id])}}}}" class="badge badge-light">{{$vehicule->type->nom}}</a>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price">{{$vehicule->prix_ht}}€</span>
                        <div>
                            @auth
                            @if (Auth::user()->admin == 1)
                            <a href="{{route('delete',['id'=>$vehicule->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-trash"></i></a>
                            <a href="{{route('edit',['id'=>$vehicule->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-pen"></i></a>
                            @endif
                            @endauth
                            <a href="{{ route('voir_plus',['id'=>$vehicule->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection
