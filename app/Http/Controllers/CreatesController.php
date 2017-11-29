<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeune;

class CreatesController extends Controller
{
    //
    public function home(){
        $jeunes = Jeune::all();
        return view('home',['jeunes' => $jeunes]);
    }

    public function add(Request $request){
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'datenaissance' => 'required',
            'nationalite' => 'required',
            'quartier' => 'required',
            'formation' => 'required',
            'numerosim' => 'required',
            'numerowhatsapp' => 'required',
            'email' => 'required',

        ]);

        $jeunes = new Jeune;
        $jeunes->nom = $request->input('nom');
        $jeunes->prenom = $request->input('prenom');
        $jeunes->datenaissance = $request->input('datenaissance');
        $jeunes->nationalite = $request->input('nationalite');
        $jeunes->quartier = $request->input('quartier');
        $jeunes->formation = $request->input('formation');
        $jeunes->numerosim = $request->input('numerosim');
        $jeunes->numerowhatsapp = $request->input('numerowhatsapp');
        $jeunes->email = $request->input('email');
        $jeunes->save();

        return redirect('/')->with('info', 'Article Enregistré avec Succès');


    }

}
