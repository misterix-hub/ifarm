@extends('layouts.leftSideBar')

@section('content')
<div class="container-fluid" style="padding-top: 13px; padding-bottom: 13px;">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb font-size-13 white pl-0 pb-0 pt-0 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>                    
                    <li class="breadcrumb-item"><a href="#">Liste champs</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $id }}</a></li>
                    <li class="breadcrumb-item active">Détails</li>
                </ol>
            </div>
        </div>
    </div><div class="border-bottom"></div><br />

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h4>Modifier un champs</h4>

                @if ($message = Session::get('success'))
                    {{ $message }}
                @endif

                @if ($message = Session::get('error'))
                    {{ $message }}
                @endif

                <form action="{{ route('updateChamps', $id) }}" method="post">
                    @csrf
            
                    @foreach ($champs as $champ) 
                        <table width="100%">
                            <tr>
                                <td width="60%">
                                    <label for="ferme"><b>Sélectionnez la ferme</b></label>
                                </td>
                                <td>
                                    <select required name="ferme" id="ferme" class="custom-select custom-select-sm">
                                        <option value="" selected disabled>Sélectionner une ferme</option>
                                        @forelse ($fermes as $ferme)
                                            <option value="{{ $ferme->id }}" {{ ($ferme->id == $champ->ferme_id) ? 'selected' : '' }} >{{ $ferme->nom }}</option>
                                        @empty
                                            <option value="">Aucune ferme</option>
                                        @endforelse
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nom"><b>Nom du champs</b></label>
                                </td>
                                <td>
                                    <input type="text" id="nom" required name="nom" class="form-control form-control-sm mt-2 mb-2" value="{{ $champ->nom }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="lat"><b>Latitude</b></label>
                                </td>
                                <td>
                                    <input type="text" id="lat" name="lat" value="{{ $champ->lat }}" class="form-control form-control-sm mb-2">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="long"><b>Longitude</b></label>
                                </td>
                                <td>
                                    <input type="text" id="long" name="long" value="{{ $champ->long }}" class="form-control form-control-sm mb-2">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="superficie"><b>Superficie</b></label>
                                </td>
                                <td>
                                    <input type="text" id="superficie" name="superficie" value="{{ $champ->superficie }}" class="form-control form-control-sm mb-2">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><br />
                                    <label for="map"><b>Adresse map</b></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea name="map" id="map" class="form-control" rows="4" placeholder="Coller l'adresse ici">{{ $champ->addresse_map }}</textarea><br />
                                </td>
                            </tr>
                        </table>
                    @endforeach

                    <button type="submit" class="btn btn-md btn-green ml-0">
                        Ajouter
                    </button>
                </form>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12"></div>
            <div class="col-lg-5 col-md-12 col-sm-12"><br />
                <div class="card border-warning">
                    <div class="card-body">
                        <h4 class="card-title">Obtenir de l'aide</h4>
                        <p class="card-text">
                            <b>Semence</b><br />
                            Lorem ipsum dolor sit amet, consectetur ad
                            ipisicing elit. Iusto, officiis. Omnis sunt
                            voluptas saepe aperiam fugit laboriosam? Id
                        </p><hr />

                        <p class="card-text">
                            <b>Largeur entre les rangs</b><br />
                            Lorem ipsum dolor sit amet, consectetur ad
                            ipisicing elit. Iusto, officiis. Omnis sunt
                            voluptas saepe aperiam fugit laboriosam? Id.<br />
                            <ul>
                                <li>
                                    Exemple : 2.5 m
                                </li>
                            </ul>
                        </p><hr />

                        <p class="card-text">
                            <b>Distance entre les plants</b><br />
                            Lorem ipsum dolor sit amet, consectetur ad
                            ipisicing elit. Iusto, officiis. Omnis sunt
                            voluptas saepe aperiam fugit laboriosam? Id<br />
                            <ul>
                                <li>
                                    Exemple : 2.5 m
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection