<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">A propos</h4>
                    <p class="text-info">Nous sommes une agence de location de vehicule, nous vous proposons des vehicules  de toutes marques et de toutes catégories.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <a href="#" class="btn btn-primary my-2">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="{{ route('home')}}" class="navbar-brand d-flex align-items-center">
                <img src="{{asset('img/voiture.png')}}" width="30" height="30" alt="">
                <strong>Location de vehicule</strong>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Type de véhicule</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav justify-content-center">
            @foreach ($types as $type)
            <li class="nav-item active">
                <a class="nav-link" href="{{route('voir_type_categorie',['id'=>$type->id])}}">{{$type->nom}}</a>
            </li>
            @endforeach
          </ul>
        </div>
      </nav>

</header>
