<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Ferme;
use App\Modeles\Champs;

class ChampsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('champs.ajouter', [
            'fermes' => Ferme::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Champs::where('nom', $request->nom)->where('ferme_id', $request->ferme)->get()) == 0) {
            $champs = new Champs;
            $champs->ferme_id = $request->ferme;
            $champs->nom = $request->nom;
            $champs->lat = $request->lat;
            $champs->long = $request->long;
            $champs->superficie = $request->superficie;
            $champs->addresse_map = $request->map;
            $champs->save();

            return back()->with('success', "Champs ajouté avec succès !");
        } else {
            return back()->with('error', "Nom déjà pris pour cette ferme");
        }
        
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
        $champs = Champs::where('id', $id)->get();

        if (count($champs) == 0) {
            abort('404');
        } else {
            return view('champs.modifier', [
                'fermes' => Ferme::all(),
                'champs' => $champs,
                'id' => $id
            ]);   
        }
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
        $champs = Champs::FindOrFail($id);
        $champs->ferme_id = $request->ferme;
        $champs->nom = $request->nom;
        $champs->lat = $request->lat;
        $champs->long = $request->long;
        $champs->superficie = $request->superficie;
        $champs->addresse_map = $request->map;
        $champs->save();

        return back()->with('success', "Champs mis à jour avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $champs = Champs::findOrFail($id);
        $champs->delete();

        return back()->with('success', "Champs supprimé avec succès !");
    }

    public function map($id) {
        $champs = Champs::where('id', $id)->get();

        foreach ($champs as $champ) {
            $map = $champ->addresse_map;
        }

        return view('champs.map', [
            'map' => $map
        ]);
    }
}
