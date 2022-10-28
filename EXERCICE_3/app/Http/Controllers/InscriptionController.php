<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    public function index(){
        return View('home');
    }

    /**
     * Enregistrement des informations recu.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:255',
          'email' => 'required|email:rfc|unique:inscriptions',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //Enregistre si il n y a pas d'erreur
        $ins = Inscription::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('list-inscription')->with('status','Enregistrement reussi avec succes!!!');
    }

    /**
     * Lit des enregistrements.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function getList(){
        $inscriptions = Inscription::orderBy('id','DESC')->get();
        return View('list', compact('inscriptions'));
      }
}
