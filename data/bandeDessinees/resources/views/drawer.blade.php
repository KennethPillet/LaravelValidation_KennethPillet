@extends('layouts.base'){{-- recherche le fichier base dans layouts --}}

@section('title', 'Dessinateur') {{-- le deuxieme argument ser celui remplacer dans le 'yield' du fichier de extends --}}
@section('css')
    <link rel="stylesheet" href="{{ url('css/drawer.css')}}">
@endsection

@section('content')
    <section>
        <div class="card">
            <h1>Détail du déssinateur</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Année de Naissance</th>
                            <th scope="col">Nationalité</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $drawer->id }}</th>
                            <td>{{ $drawer->name }}</td>
                            <td>{{ $drawer->birth_year }}</td>
                            <td>{{ $drawer->nationality }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection {{-- pour ecrire du html proprement entre la "section" --}}

