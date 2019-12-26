<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Semence;
use App\Modeles\Engrais;
use App\Modeles\Insecticide;
use App\Modeles\SemenceInsceticide;
use App\Modeles\SemenceEngrais;

class SemenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engrais = Engrais::leftJoin('semence_engrais', 'engrais.id', 'engrais_id')
                            ->where('semence_id', $request->semence)->get();

        $insecticides = Insecticide::leftJoin('semence_insecticides', 'insecticides.id', 'insecticide_id')
                            ->where('semence_id', $request->semence)->get();

        $semences = Semence::where('id', $request->semence)->get();

        foreach ($semences as $semence) {
            $nom = $semence->nom;
            $kilo_par_metre = $semence->kilo_par_metre;
            $temp_de_rendement = $semence->temp_de_rendement;
        }

        $aujourdhui = date('Y-m-d');
        $mois = ["", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
                    "Octobre", "Novembre", "Décembre"];

        return view('semences.create', [
            'engrais' => $engrais,
            'insecticides' => $insecticides,
            'champs' => $request->champs,
            'nom' => $nom,
            'kilo_par_metre' => $kilo_par_metre,
            'temp_de_rendement' => $temp_de_rendement,
            'largeur' => $request->largeur,
            'distance' => $request->distance,
            'aujourdhui' => $aujourdhui,
            'mois' => $mois,
            'date_recolte' => date('Y-m-d', strtotime("$aujourdhui + " . $temp_de_rendement . " day"))
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('semences.editer', [
            'id' => $id,
            'semences' => Semence::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
