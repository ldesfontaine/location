<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Ajouter un types") }}
        </h2>
    </x-slot>

    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="actif">actif</label>
                <select class="form-control" name="actif" id="actif">
                        <option value="1">actif</option>
                        <option value="0">desactivé</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</x-app-layout>
