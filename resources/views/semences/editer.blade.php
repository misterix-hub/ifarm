@extends('layouts.leftSideBar')

@section('content')

    <div class="container-fluid" style="padding-top: 13px; padding-bottom: 13px;">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb font-size-13 white pl-0 pb-0 pt-0 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>                    
                    <li class="breadcrumb-item"><a href="#">Liste champs</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $id }}</a></li>
                    <li class="breadcrumb-item active">Semence</li>
                </ol>
            </div>
        </div>
    </div><div class="border-bottom"></div><br />

    <div class="container-fluid">
        <div class="row">
            
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
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form action="{{ route('storeSemence') }}" method="post">
                    @csrf
                    <br /><br />
                    <h4>Simulation de semence</h4><hr />
                    <table width="100%">
                        <tr>
                            <td width="50%">
                                <label for="semence"><b>Semence</b></label>
                            </td>
                            <td>
                                <select name="semence" required id="semence" class="custom-select custom-select-sm">
                                    <option value="" disabled selected>Sélectionnez la sémence</option>
                                    @foreach ($semences as $semence)
                                        <option value="{{ $semence->id }}">{{ $semence->nom }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">
                                <label for="largeur"><b>Largeur entre les rangs (en mètres)</b></label>
                            </td>
                            <td>
                                <input type="text" required class="form-control form-control-sm mt-2 mb-2" name="largeur" id="largeur" placeholder="Saisir dans le champs ...">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="distance"><b>Distance entre les plants en (mètres)</b></label>
                            </td>
                            <td>
                                <input type="text" required class="form-control form-control-sm" name="distance" id="distance" placeholder="Saisir dans le champs ...">
                            </td>
                        </tr>
                    </table>
                    
                    <input type="hidden" name="champs" value="{{ $id }}">
            
                    <button type="submit" class="btn btn-green btn-md ml-0">
                        Soumettre
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

    <button href="{{ route('createChamps') }}" class="btn btn-green rounded-circle float-btn">
        <i class="icofont-plus"></i>
    </button>

@endsection