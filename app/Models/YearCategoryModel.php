<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearCategoryModel extends Model
{
    use HasFactory;

    protected $table = 'year_category';
    public $timestamps = false;

    protected $fillable = [
        'year',
    ];
}
