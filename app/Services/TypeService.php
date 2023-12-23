<?php

namespace App\Services;

use App\Models\TypeCategoryModel;

/**
 * Class TypeService.
 */
class TypeService
{
    public static function getTypeArrayAndValues($types){
        $typeArray=[];
        foreach ($types as $type) {
            $typeArray[$type->type] = $type->active;
        }
        return $typeArray;
    }

    public static function updateTypeTable($values){
        foreach ($values as $key => $value) {
            TypeCategoryModel::where('type', $key)->update(['active' => $value]);
        }
    }
}
