<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnimalController extends Controller
{
    function create_animal(Request $request) {
        $validator = Validator::make($request->all(), [
            'especes' => 'required',
            'id_users_cree' => 'required',
            'id_users_proprietaire' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Required fields'
            ],400);
        } else {
            $animal = new Animals();
            $animal->especes = $request->especes;
            $animal->id_users_cree = $request->id_users_cree;
            $animal->id_users_proprietaire = $request->id_users_proprietaire;

            $animal->save();

            return response()->json($animal, 201);
        }
    }

    function print_animal() {
        return response()->json(Animals::all(), '200');
    }

    function mise_a_jour_animal(Request $request, $id) {
        $animal = Animals::where('id', $id)->first();

        if ($animal){
            $animal = Animals::updateDTOtoObject($request, $animal);
            $animal->save();

            return response()->json([
                'animal' => "updated"
            ], 200);
        } else {
            return response()->json([
                'animal' => "animal doesn't exist."
            ],400);
        }
    }

    function supprime_animal(Request $request, $id) {
        $animal = Animals::where('id', $id)->first();

        if ($animal) {
            $animal->delete();

            return response()->json([
                'animal' => "delected"
            ],200);
        } else {
            return response()->json([
                'animal' => "animal doesn't exist"
            ],400);
        }
    }

    function print_animaux_users($id) {
        return Animals::where('id_users_cree', $id)->get();
    }

    function print_users_animaux_possedes($animal) {
        return Animals::where('especes', $animal)->get();
    }
}
