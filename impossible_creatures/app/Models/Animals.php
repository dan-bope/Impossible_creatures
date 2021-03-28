<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animals extends Model
{
    use SoftDeletes;

    static function updateDTOtoObject($request, $animal) {

        if ($animal) {
            if ($request->especes) {
                $animal->especes = $request->especes;
            }
            if ($request->id_users_cree) {
                $animal->name = $request->id_users_cree;
            }
            if ($request->id_users_proprietaire) {
                $animal->id_users_proprietaire = $request->id_users_proprietaire;
            }
            return ($animal);
        }
    }
}
