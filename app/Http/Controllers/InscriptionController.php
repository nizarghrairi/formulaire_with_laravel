<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulaire;
use App\Http\Requests;


class InscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('formulaire.inscription');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {


            $this->validate($request, [

                "name" => "required",
                "lastname" => "required",
                "email" => "required",
                "direction" => "required",
                "nomForm" => "required",
                "discForm" => "required",
                "cible" => "required",
                "valid" => "required",
                "besoin" => "required",
                "comp" => "required",
                "niveau" => "required",
                "objectif" => "required",
                "urgence" => "required",
                "importance" => "required",

            ]);


            $for = new Formulaire();
            $for ->name = $request->input('name');
            $for ->lastname = $request->input('lastname');
            $for ->email = $request->input('email');
            $for ->direction = $request->input('direction');
            $for ->nomForm = $request->input('nomForm');
            $for ->discForm = $request->input('discForm');
            $for ->cible = $request->input('cible');
            $for ->valid = $request->input('valid');
            $for->besoin = implode(',', $request->input('besoin'));
            $for ->comp = $request->input('comp');
            $for ->niveau = $request->input('niveau');
            $for ->objectif = $request->input('objectif');
            $for ->urgence = $request->input('urgence');
            $for ->importance = $request->input('importance');
            $for->save();


        }

        return redirect()->route('formulaire.show');
    }

    public function show()
    {
        $formulaire = Formulaire::paginate(2);
        $arr = array('formulaire'=> $formulaire);
        return view('formulaire.show',$arr);
    }
}
