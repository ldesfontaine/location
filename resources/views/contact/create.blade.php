@extends('shop')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h3>Contacter nous</h3>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control">
                    {!!$errors->first('name','<sapn class="help-block">:message</sapn>')!!}
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    {!!$errors->first('email','<sapn class="help-block">:message</sapn>')!!}

                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    {!!$errors->first('message','<sapn class="help-block">:message</sapn>')!!}

                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</div>

@endsection
