@extends('shop')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categorie</li>
    </ol>
</nav>
@endsection
