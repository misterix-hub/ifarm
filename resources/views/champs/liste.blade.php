@extends('layouts.header')

@section('content')

    @if ($message = Session::get('error'))
        {{ $message }}
    @endif

    @if ($message = Session::get('success'))
        {{ $message }}
    @endif

    @foreach ($fermes as $ferme)
        <h4>{{ $ferme->nom }}</h4>
        <a href="{{ route('createChamps') }}">
            Ajouter un champs
        </a><br /><br />
        @forelse ($champs as $champ)
            Nom : {{ $champ->nom }}<br />
            Latitude : {{ $champ->lat }}<br />
            Longitude : {{ $champ->long }}<br />
            Superficie : {{ $champ->superficie }}<br />
            Adresse map : {{ $champ->addresse_map }}<br />
            <a href="{{ route('editSemence', $champ->superficie) }}">Semence</a>
            <a href="{{ route('editChamps', $champ->id) }}">Modifier</a>
            <a href="{{ route('destroychamps', $champ->id) }}" onclick="return confirm('Êtes-vous sur(e) de vouloir supprimer la ferme {{ $champ->nom }} ? Touts les éléments de cette ferme seront supprimés.')">Supprimer</a>

            <br /><br /><br />
        @empty
            Aucun champs !
        @endforelse
    @endforeach
@endsection