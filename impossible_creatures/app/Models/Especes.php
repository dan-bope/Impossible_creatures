<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especes extends Model
{
    use SoftDeletes;

    static function updateDTOtoObject($request, $espece) {

        if ($espece) {
            if ($request->name) {
                $espece->name = $request->name;
            }
            if ($request->deux_epeces_parents) {
                $espece->deux_epeces_parents = $request->deux_epeces_parents;
            }
            if ($request->users_inventaire) {
                $espece->users_inventaire = $request->users_inventaire;
            }
            return ($espece);
        }
    }

    protected $casts = [
        'deux_epeces_parents' => 'array',
    ];
}
