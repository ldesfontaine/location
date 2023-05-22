
@if (Auth::user()->admin == 1)
<style>
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }

    .fa-pen,
    .fa-trash,
    .fa-plus {
        color: #fff;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .bg-white {
        background-color: #fff;
    }

    .border-b {
        border-bottom-width: 1px;
    }

    .border-gray-200 {
        border-color: #e2e8f0;
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .max-w-7xl {
        max-width: 80rem;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .fa-solid .fa-plus {
        position: relative;
        top: 1px;
    }

    .fa-pen:before {
        content: "\f303";
    }

    .fa-trash:before {
        content: "\f2ed";
    }

    .fa-plus:before {
        content: "\f067";
    }

    .fa {
        display: inline-block;
        font: normal normal normal 24px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .fa-pen:before {
        content: "\f303";
    }

    .fa-trash:before {
        content: "\f2ed";
    }

    .fa-plus:before {
        content: "\f067";
    }

    .fa {
        display: inline-block;
        font: normal normal normal 24px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>

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
