<?php

namespace App\Services;

use App\Models\DisciplineCategoryModel;
use App\Models\DisciplineYearModel;
use App\Models\YearCategoryModel;

use function PHPUnit\Framework\isNull;

/**
 * Class DisciplineYearService.
 */
class DisciplineYearService
{
    public static function getAllYears(){
        return YearCategoryModel::get(); 
    }

    public static function getAllDisciplines($years){
        $data = [];
        $disciplines = DisciplineCategoryModel::get();

        foreach ($disciplines as $dp) {    
            foreach ($years as $year) {
                $data[$dp->name][$dp->name.'_'.$year->year] = [
                    'value' => is_null(self::getDisciplineYearRow($dp->id, $year->id)) ? false : true,
                    'dp' => $dp->id,
                    'year' => $year->id,
                ];
            }
        }
        return $data; 
    }

    private static function getDisciplineYearRow($dp, $year){
        return DisciplineYearModel::where('discipline_id', $dp)->where('year_id', $year)->first();
        
    }

    private static function updateTable($dp, $year){
        $table = self::getDisciplineYearRow($dp, $year);
        if(is_null($table)){
            dd('fuck');
        }else{
            $table->delete();
        }
        
    }

    public static function findeDiffInArray($old, $new){
        //dd($old, $new);
        foreach ($new as $discKey => $disc) {
            foreach ($disc as $key => $dp) {
                if($old[$discKey][$key]['value'] != $dp['value']){self::updateTable($dp['dp'], $dp['year']);}
            }
        }
    }

    
}
