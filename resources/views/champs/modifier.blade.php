@extends('layouts.header')

@section('content')
    <h3>Modifier un champs</h3>

    @if ($message = Session::get('success'))
        {{ $message }}
    @endif

    @if ($message = Session::get('error'))
        {{ $message }}
    @endif

    <form action="{{ route('updateChamps', $id) }}" method="post">
        @csrf

        @foreach ($champs as $champ)    
            <label for="ferme">Sélectionnez la ferme</label>

            <select required name="ferme" id="ferme">
                <option value="" selected disabled>Sélectionner une ferme</option>
                @forelse ($fermes as $ferme)
                    <option value="{{ $ferme->id }}" {{ ($ferme->id == $champ->ferme_id) ? 'selected' : '' }} >{{ $ferme->nom }}</option>
                @empty
                    <option value="">Aucune ferme</option>
                @endforelse
            </select><br />

            <label for="nom">Nom du champs</label>
            <input type="text" id="nom" required name="nom" value="{{ $champ->nom }}"><br />
            <label for="lat">Latitude</label>
            <input type="text" id="lat" name="lat" value="{{ $champ->lat }}"><br />
            <label for="long">Longitude</label>
            <input type="text" id="long" name="long" value="{{ $champ->long }}"><br />
            <label for="superficie">Superficie</label>
            <input type="text" id="superficie" name="superficie" value="{{ $champ->superficie }}"><br />
            <label for="map">Adresse map</label><br />
            <textarea name="map" id="map" cols="30" rows="10" placeholder="Coller l'adresse ici">{{ $champ->addresse_map }}</textarea><br />

            <button type="submit">
                Ajouter
            </button>
        @endforeach
    </form>
@endsection