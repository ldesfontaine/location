
@if (Auth::user()->admin == 1)
<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="{{ route('create')}}" class="btn btn-primary">Ajouter un vehicule</a>
                        <br>
                        <a href="/" class="btn btn-primary">Modifier ou supprimer un vehicule</a>
                    </div>
                <hr>

                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped ">
                        <thead>
                            <span>Utilisateurs</span>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Admin</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{dd($users)}} --}}
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->admin == 1 ? 'Oui' : 'Non' }}</td>
                                <td>
                                    <a href="{{ route('UserEdit', $user->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                    <a  onclick="return confirm('Êtes-vous sûrs ?')" href="{{ route('deleteUser', $user->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                 </td>
                            </tr>
                            @endforeach
                            <br>
                            <span> Ajouter <a href="{{ route('createUser', $user->id) }}" class="btn btn-danger"><i class="fa-solid fa-plus"></i></a></span>
                        </tbody>
                    </table>
                </div>

                <hr>

                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped ">
                        <thead>
                            <span>Types de véhicule</span>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Actif</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{dd($types)}} --}}
                            @foreach ($types as $type)

                            <tr>
                                <th scope="row">{{ $type->id }}</th>
                                <td>{{ $type->nom }}</td>
                                <td>{{ $type->actif == 1 ? 'Oui' : 'Non' }}</td>
                                <td>
                                    <a href="{{ route('editType', $type->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                    <a onclick="return confirm('Êtes-vous sûrs ?')" href="{{ route('deleteType', $type->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            <br>
                            <span> Ajouter <a href="{{ route('createType', $type->id) }}" class="btn btn-danger"><i class="fa-solid fa-plus"></i></a></span>
                        </tbody>
                    </table>
                </div>

                <hr>

                {{-- show les contacts --}}

                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped ">
                        <thead>
                            <span>Contacts</span>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{dd($contacts)}} --}}
                            @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <a onclick="return confirm('Êtes-vous sûrs ?')" href="{{ route('deleteContact', $contact->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

</x-app-layout>
@else
<script>window.location = "/";</script>
@endif
