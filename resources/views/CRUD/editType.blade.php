<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Modifier les types") }}
        </h2>
    </x-slot>

    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $type->nom }}">
            </div>

            <div class="form-group">
                <label for="actif">actif</label>
                <select class="form-control" name="actif" id="actif" value="{{$type->actif}}">
                    @if ($type->actif == 1)
                        <option value="1" selected>actif</option>
                        <option value="0">desactivé</option>
                    @else
                        <option value="1">actif</option>
                        <option value="0" selected>desactivé</option>
                    @endif
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</x-app-layout>
