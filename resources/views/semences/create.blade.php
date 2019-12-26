@extends('layouts.leftSideBar')

@section('content')

    <div class="container-fluid" style="padding-top: 13px; padding-bottom: 13px;">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb font-size-13 white pl-0 pb-0 pt-0 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>                    
                    <li class="breadcrumb-item"><a href="#">Liste champs</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $champs }}</a></li>
                    <li class="breadcrumb-item"><a href="#">Semence</a></li>
                    <li class="breadcrumb-item active">Résultats</li>
                </ol>
            </div>
        </div>
    </div><div class="border-bottom"></div><br />

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 font-size-13">
                <a href="" class="float-right btn btn-grey btn-sm mr-0 z-depth-0">
                    <i class="icofont-print"></i>
                    Imprimer
                </a>
                <h4>Résultats simulation de sémence</h4><hr />    
                Sémence : <b>{{ $nom }}</b><br />
                Supperficie du champs : <b>{{ $champs }} m2</b><br />
                Largeur entre les rangs : <b>{{ $largeur }} m</b><br />
                Distance entre les plants : <b>{{ $distance }} m</b><br /><br />

                <h5 class="orange-text text-center pt-2 pb-2" style="border: 2px solid #CCC;"><b>Estimations de besoins</b></h5><br />

                <b>Besoin en semence : {{ $kilo_par_metre * $champs }} Kg</b><hr />
                <strong>Besoin en intrants</strong><br />
                <b class="green-text">Besions en engrais :</b>
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>
                                Nom de l'engrais
                            </th>
                            <th>
                                Quantité
                            </th>
                            <th>
                                Contre indication
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($engrais as $engrai)    
                            <tr>
                                <td>
                                    {{ $engrai->nom }}
                                </td>
                                <td>
                                    {{ $engrai->besoin_par_metre * $champs }} kg
                                </td>
                                <td>
                                    {{ $engrai->contre_indication }}
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="3">
                                <strong>Pas de suggestions</strong>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                Nom de l'engrais
                            </th>
                            <th>
                                Quantité
                            </th>
                            <th>
                                Contre indication
                            </th>
                        </tr>
                    </tfoot>
                </table><hr />

                <b class="green-text">Besions en insecticides :</b>
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>
                                Nom de l'insecticide
                            </th>
                            <th>
                                Quantité
                            </th>
                            <th>
                                Contre indication
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($insecticides as $insecticide)    
                            <tr>
                                <td>
                                    {{ $insecticide->nom }}
                                </td>
                                <td>
                                    {{ $insecticide->besoin_par_metre * $champs }} kg
                                </td>
                                <td>
                                    {{ $insecticide->contre_indication }}
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="3">
                                <strong>Pas de suggestions</strong>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                Nom de l'insecticide
                            </th>
                            <th>
                                Quantité
                            </th>
                            <th>
                                Contre indication
                            </th>
                        </tr>
                    </tfoot>
                </table><br />

                <h5 class="orange-text text-center pt-2 pb-2" style="border: 2px solid #CCC;"><b>Estimations de rendements</b></h5><br />

                <b>Nombre approximatifs de plants : {{ round($champs / ($distance * $largeur)) }} plants</b><br /><br />
                <h5 class="font-weight-bold">Rendement estimé à : {{ (round($champs / ($distance * $largeur))) * 2 }} Kg</h5>
                <strong>Date de récolte {{ substr($date_recolte, 8) . " " . $mois[round(substr($date_recolte, 5, 2))] . " " . substr($date_recolte, 0, 4) }}</strong>.
            </div>
        </div>
    </div><br /><br />

    <button href="{{ route('createChamps') }}" class="btn btn-green rounded-circle float-btn">
        <i class="icofont-plus"></i>
    </button>

@endsection

@section('js')
    <script>
        /*$(document).ready(function() {
            window.addEventListener("load", window.print());
        });*/
    </script>
@endsection