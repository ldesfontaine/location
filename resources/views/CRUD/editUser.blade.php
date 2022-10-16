<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Modifier l'utilisateur") }}
        </h2>
    </x-slot>

    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe</label>
                <input type="password" class="form-control" name="pwd" id="pwd" value="coucou">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="role" id="role" value="{{$user->admin}}">
                    @if ($user->admin == 1)
                        <option value="1" selected>Admin</option>
                        <option value="0">User</option>
                    @else
                        <option value="1">Admin</option>
                        <option value="0" selected>User</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</x-app-layout>
