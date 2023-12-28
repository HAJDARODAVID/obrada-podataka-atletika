<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplineYearModel extends Model
{
    use HasFactory;

    protected $table = 'discipline_for_years';
    public $timestamps = false;

    protected $fillable = [
        'discipline_id',
        'year_id',
    ];
}
