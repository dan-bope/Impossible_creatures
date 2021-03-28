<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    function print_Alltrabsactions() {
        return response()->json(Transactions::all(), '200');
    }

    function print_TransactionByUser($id) {
        return Transactions::where('id_users_vendeur', $id)->get();
    }

    function create_Transaction(Request $request) {
        $validator = Validator::make($request->all(), [
            'id_users_vendeur' => 'required',
            'id_animal_vendu' => 'required',
            'prix' => 'required',
            'date_mise_en_vente' => 'required',
            'id_users_acheteur' => 'required',
            'date_achat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Required fields'
            ],400);
        } else {
            $transaction = new Transactions();
            $transaction->id_users_vendeur = $request->id_users_vendeur;
            $transaction->id_animal_vendu = $request->id_animal_vendu;
            $transaction->prix = $request->prix;
            $transaction->date_mise_en_vente = $request->date_mise_en_vente;
            $transaction->id_users_acheteur = $request->id_users_acheteur;
            $transaction->date_achat = $request->date_achat;

            $transaction->save();

            return response()->json($transaction, 201);
        }
    }

    function annuler_transaction(Request $request, $id) {
        $transaction = Transactions::where('id', $id)->first();

        if ($transaction) {
            $transaction->delete();

            return response()->json([
                'transaction' => "delected"
            ],200);
        } else {
            return response()->json([
                'transaction' => "transaction doesn't exist"
            ],400);
        }
    }

    function mise_a_jour_transaction(Request $request, $id) {
        $transaction = Transactions::where('id', $id)->first();

        if ($transaction){
            $transaction = Transactions::updateDTOtoObject($request, $transaction);
            $transaction->save();

            return response()->json([
                'transaction' => "updated"
            ], 200);
        } else {
            return response()->json([
                'transaction' => "animal doesn't exist."
            ],400);
        }
    }
}
