<?php

namespace App\Http\Controllers;

use App\Models\Especes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EspeceController extends Controller
{
    function create_espece(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deux_epeces_parents' => 'required',
            'users_inventaire' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Required fields'
            ],400);
        } else {
            $espece = new Especes();
            $espece->name = $request->name;
            $espece->deux_epeces_parents = $request->deux_epeces_parents;
            $espece->users_inventaire = $request->users_inventaire;

            $espece->save();

            return response()->json($espece, 201);
        }
    }

    function print_especes() {
        return response()->json(Especes::all(), '200');
    }

    function mise_a_jour_espece(Request $request, $id) {
        $espece = Especes::where('id', $id)->first();

        if ($espece){
            $espece = Especes::updateDTOtoObject($request, $espece);
            $espece->save();

            return response()->json([
                'espece' => "updated"
            ], 200);
        } else {
            return response()->json([
               'espece' => "espece doesn't exist."
            ],400);
        }
    }

    function supprime_espece(Request $request, $id) {
        $espece = Especes::where('id', $id)->first();

        if ($espece) {
            $espece->delete();

            return response()->json([
                'espece' => "delected"
            ],200);
        } else {
            return response()->json([
               'espece' => "espece doesn't exist"
            ],400);
        }
    }

    function print_especes_users($id) {
        return Especes::where('users_inventaire', $id)->get();
    }
}
