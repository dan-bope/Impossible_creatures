<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use SoftDeletes;

    static function updateDTOtoObject($request, $transaction) {

        if ($transaction) {
            if ($request->id_users_vendeur) {
                $transaction->id_users_vendeur = $request->id_users_vendeur;
            }
            if ($request->id_animal_vendu) {
                $transaction->id_animal_vendu = $request->id_animal_vendu;
            }
            if ($request->prix) {
                $transaction->prix = $request->prix;
            }
            if ($request->date_mise_en_vente) {
                $transaction->date_mise_en_vente = $request->date_mise_en_vente;
            }
            if ($request->id_users_acheteur) {
                $transaction->id_users_acheteur = $request->id_users_acheteur;
            }
            if ($request->date_achat) {
                $transaction->date_achat = $request->date_achat;
            }
            return ($transaction);
        }
    }
}
