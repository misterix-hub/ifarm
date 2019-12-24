@extends('layouts.header')

@section('content')
    <h1>Résultats simulation de sémence</h1>

    <a href="">
        Imprimer le document
    </a><br /><br />

    Supperficie du champs : {{ $champs }} m2<br />
    Sémence : Coton<br />
    <h3>Estimations de besoins</h3>
    <strong>Besoin en semence</strong> : {{ $kilo_par_metre * $champs }} Kg<br />
    <strong>Besoin en intrants :</strong><br />
    Besions en insecticides :

    <table border="1">
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
            <tr>
                <td>
                    Insecticide I
                </td>
                <td>
                    245 kg
                </td>
                <td>
                    Lorem ipsum dolor sit, amet consectetur a
                    dipisicing elit. Dolore est architecto bl
                    anditiis ad ex. Nobis placeat quibusdam a
                    upiditate voluptatum suscipit, quo quia e
                </td>
            </tr>
            <tr>
                <td>
                    Insecticide II
                </td>
                <td>
                    250 kg
                </td>
                <td>
                    Lorem ipsum dolor sit, amet consectetur a
                    dipisicing elit. Dolore est architecto bl
                    anditiis ad ex. Nobis placeat quibusdam a
                    upiditate voluptatum suscipit, quo quia e
                </td>
            </tr>
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
    
    Besions en engrais :
    
    <table border="1">
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
            <tr>
                <td>
                    Insecticide I
                </td>
                <td>
                    245 kg
                </td>
                <td>
                    Lorem ipsum dolor sit, amet consectetur a
                    dipisicing elit. Dolore est architecto bl
                    anditiis ad ex. Nobis placeat quibusdam a
                    upiditate voluptatum suscipit, quo quia e
                </td>
            </tr>
            <tr>
                <td>
                    Insecticide II
                </td>
                <td>
                    250 kg
                </td>
                <td>
                    Lorem ipsum dolor sit, amet consectetur a
                    dipisicing elit. Dolore est architecto bl
                    anditiis ad ex. Nobis placeat quibusdam a
                    upiditate voluptatum suscipit, quo quia e
                </td>
            </tr>
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
    </table><br />
    
    <h3>Estimation de rendement</h3>
    Nombre approximatifs de plants : {{ $champs * $ecart }} plants<br />
    <h1>Rendement : {{ ($champs * $ecart) * 2 }} Kg</h1>
    <strong>Période de récolte</strong> {{ date('Y-m-d', strtotime("$aujourdhui + " . $temp_de_rendement . " day")) }}.
    

@endsection