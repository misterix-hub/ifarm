.@extends('layouts.header')

@section('css')
    <style>
        
    </style>
@endsection

@section('leftSideBar')
    <div class="left-side-bar">
        <div class="green darken-4">
            <div class="font-weight-bold p-2">
                <table width="100%">
                    <tr>
                        <td>
                            <a href="">
                                <i class="icofont-anchor icofont-2x green-text"></i>
                                <span class="white-text">Ifarm</span>
                            </a>
                        </td>
                        <td class="text-right">
                            <a href="" class="float-right">
                                <small><i class="icofont-plus white-text"></i></small>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="border-right: 1px solid #CCC; position: absolute; top: 46px; bottom: 0; left: 0; right: 0;">
            <div class="mt-2"></div>&nbsp;
            <small style="color: #a5dda3;"><b>GESTION DE CHAMPS</b></small><hr class="mt-1 mb-0" />
            <div class="menu-item font-size-14">
                <ul type="none" class="pl-0 mt-1">
                    <li>
                        <a href="">
                            <div class="pl-2 pr-2">
                                <i class="icofont-plus"></i>
                                <strong>Ajouter un champs</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="pl-2 pr-2">
                                <i class="icofont-listing-number"></i>
                                <strong>Liste des champs</strong>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-4"></div>&nbsp;
            <small style="color: #a5dda3;"><b>GESTION DE STOCK</b></small><hr class="mt-1 mb-0" />
            <div class="menu-item font-size-14">
                <ul type="none" class="pl-0 mt-1">
                    <li>
                        <a href="">
                            <div class="pl-2 pr-2">
                                <i class="icofont-database"></i>
                                <strong>Sotck pour la vente</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="pl-2 pr-2">
                                <i class="icofont-tree"></i>
                                <strong>Stock en semence</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div>
                                <i class="icofont-leaf"></i>
                                <strong>Sotck en engrais</strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icofont-bug"></i>
                            <strong>Stock en insecticide</strong>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-4"></div>&nbsp;
            <small style="color: #a5dda3;"><b>GESTION DU MATERIEL</b></small><hr class="mt-1 mb-0" />
            <div class="menu-item font-size-13">
                <ul type="none" class="pl-2 mt-1">
                    <li>
                        <a href="">
                            <i class="icofont-plus"></i>
                            <strong>Ajouter un matériel</strong>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icofont-listing-number"></i>
                            <strong>Liste des matériels</strong>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="mt-4"></div>&nbsp;
            <small style="color: #a5dda3;"><b>GESTION DE CAISSE</b></small><hr class="mt-1 mb-0" />
            <div class="menu-item font-size-13">
                <ul type="none" class="pl-2 mt-1">
                    <li>
                        <a href="">
                            <i class="icofont-money"></i>
                            <strong>Bilan de caisse</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrappable-content">
        @yield('content')
    </div>
@endsection