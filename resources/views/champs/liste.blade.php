@extends('layouts.leftSideBar')

@section('content')

    @foreach ($fermes as $ferme)
        @php
            $nom = $ferme->nom;
        @endphp
    @endforeach

    <div class="container-fluid green darken-4" style="padding-top: 11px; padding-bottom: 11px;">
        <div class="row">
            <div class="col-12">
                <a href="" class="white-text">
                    <i class="icofont-navigation-menu"></i>
                </a>
                <a href="" class="white-text">
                    <small><b>&nbsp;</b></small>
                </a>
            </div>
        </div>
    </div>
    <br />
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb font-size-13 white pl-0 pb-0 pt-0 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $nom }}</a></li>
                    <li class="breadcrumb-item active">Liste champs</li>
                </ol><br />
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Liste des champs</h4>
            </div>
            @if ($message = Session::get('error'))
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        {{ $message }}
                    </div>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        {{ $message }}
                    </div>
                </div>
            @endif

            @forelse ($champs as $champ)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb-3 z-depth-0 border">
                        <div class="card-header font-size-13">
                            <a href="{{ route('maps', $champ->id) }}">
                                <i class="icofont-map"></i>
                                Visualiser
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('editSemence', $champ->superficie) }}" class="btn btn-sm btn-outline-green z-depth-0 m-0 float-right"
                            style="border-radius: 20px;">
                                <i class="icofont-tree"></i>
                                <strong>semence</strong>
                            </a>
                            <h4 class="card-title">{{ $champ->nom }}</h4>
                            <p class="card-text">
                                Latitude : {{ $champ->lat }}<br />
                                Longitude : {{ $champ->long }}<br />
                                Superficie : {{ $champ->superficie }} m2
                            </p>
                        </div>
                        <div class="card-footer font-size-13">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <small>
                                            <a href="{{ route('editChamps', $champ->id) }}">
                                                <i class="icofont-edit"></i>
                                                Modifier
                                            </a>
                                        </small>
                                    </td>
                                    <td class="text-right">
                                        <small>
                                            <a href="{{ route('destroychamps', $champ->id) }}" class="red-text"
                                                onclick="return confirm('Êtes-vous sur(e) de vouloir supprimer la ferme {{ $champ->nom }} ? Touts les éléments de ce champs seront supprimés.')">
                                                <i class="icofont-trash"></i>
                                                Supprimer
                                            </a>
                                        </small>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <b>Pas de champs enregistré !</b>
                </div>
            @endforelse
        </div>
    </div>

    <button href="{{ route('createChamps') }}" class="btn btn-green rounded-circle float-btn">
        <i class="icofont-plus"></i>
    </button>

@endsection