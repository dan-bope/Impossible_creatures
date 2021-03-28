<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function create() {
        $validator = Validator::make(\request()->all(), [
            'name' => 'required',
            'email' => 'email',
            'password' => 'required',
            'quantite_argent' => 'required',
            'quantite_points' =>'required',
            'inventaire_animals' => 'required',
            'liste_especes' => 'required',
            'vendeur' => 'required',
            'acheteur' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Registration Failed'
            ], 400);
        } else {
            $user = new User([
                'name' => \request('name'),
                'email' => \request('email'),
                'password' => \request('password'),
                'quantite_argent' => \request('quantite_argent'),
                'quantite_points' => \request('quantite_points'),
                'inventaire_animals' => \request('inventaire_animals'),
                'liste_especes' => \request('liste_especes'),
                'vendeur' => \request('vendeur'),
                'acheteur' => \request('acheteur')
            ]);
            $user->save();

            return response()->json($user,'201');
        }
    }

    function print_users() {
        return response()->json(User::all(), '200');
    }

    function login_user() {
        $validator = Validator::make(\request()->all(),[
            'email' => 'email',
            'password' => 'required',
        ]);

        /*$resultat = auth()->attempt([
           'email' => \request('email'),
           'password' => \request('password'),
        ]);*/

        if ($validator->fails()) {

            return response()->json([
                'message' => "authenticate failed"
            ], 400);
        }


        $resultat = \request(['email','password']);

        if (Auth::attempt($resultat)) {
            return response()->json([
                'message' => "authenticate"
            ], 200);
        }

        //$user = User::where('email',\request('email'))->first();

        //$Resultattoken = $user->createToken('authToken')->plainTextToken;

        /*return response()->json([
           'message' => "authenticate success"
        ],$Resultattoken);*/
    }

    function print_x_users($point) {

        return User::orderByDesc('quantite_points')->limit($point)->get();
    }

    function print_bis($animal) {
        return User::where('liste_especes->espece', $animal)->get();
    }

    function print_user_vendeur($id_vendeur) {
        return User::where('vendeur', $id_vendeur)->get();
    }

}
