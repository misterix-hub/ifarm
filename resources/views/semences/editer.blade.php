@extends('layouts.header')

@section('content')
    <h1>Semence</h1>

    <form action="{{ route('storeSemence') }}" method="post">
        @csrf
        <label for="semence">Semence</label>
        <select name="semence" required id="semence">
            <option value="" disabled selected>Sélectionnez la sémence</option>
            @foreach ($semences as $semence)
                <option value="{{ $semence->id }}">{{ $semence->nom }}</option>
            @endforeach
        </select><br />

        <label for="ecart">Plant par m2</label>
        <input type="text" required name="ecart" id="ecart" placeholder="Saisir dans le champs ..."><br />
        <input type="hidden" name="champs" value="{{ $id }}">

        <button type="submit">
            Soumettre
        </button>
    </form>
@endsection