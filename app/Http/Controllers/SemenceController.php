<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Semence;

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
        /*$aujourdhui = date('Y-m-d');
        
        return date('Y-m-d', strtotime("$aujourdhui +1 month"));*/

        $semences = Semence::where('id', $request->semence)->get();

        foreach ($semences as $semence) {
            $nom = $semence->nom;
            $kilo_par_metre = $semence->kilo_par_metre;
            $temp_de_rendement = $semence->temp_de_rendement;
        }

        return view('semences.create', [
            'champs' => $request->champs,
            'kilo_par_metre' => $kilo_par_metre,
            'temp_de_rendement' => $temp_de_rendement,
            'ecart' => $request->ecart,
            'aujourdhui' => date('Y-m-d'),
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
