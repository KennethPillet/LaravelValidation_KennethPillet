@extends('layouts.base')

@section('title', 'Accueil')
@section('css')
    <link rel="stylesheet" href="{{ url('css/home.css')}}">
@endsection

@section('content')
    <h1>Bienvenu</h1>
    <div class="intro">
        <p>Ceci un site codé en formation It Akademy afin de validé une base avec le framework PHP Laravel</p> <br>
        <p>Nous allons présenter quelques personnages, avec des détails</p> <br>
    </div>
    <div class="table">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Apparition</th>
                    <th scope="col">Année</th>
                    <th scope="col">Dessinateur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <th scope="row">{{ $character->id }}</th>
                        <td>{{ $character->name }}</td>
                        <td>{{ $character->apparition_name }}</td>
                        <td>{{ $character->creation_year }}</td>
                        <td><a href="/drawer/{{ $character->drawer_id }}">{{ $character->drawer->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

