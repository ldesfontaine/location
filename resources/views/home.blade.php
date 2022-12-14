<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/voiture.png')}}">

    <title>Loctawatur</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/album.css')}}" rel="stylesheet">
    <link href="{{asset('css/voiture.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>

@include('layouts.header')

    <main role="main">

        <section class="py-5 text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Trouver votre vehicule !</h1>
                <p class="lead text-muted">Voici notre catalogue</p>

            </div>
        </section>

      @yield('content')

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>&nbspLoctawatur<br>&copy;Copyright</p>

        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
  </body>
</html>
