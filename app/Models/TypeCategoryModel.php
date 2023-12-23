<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCategoryModel extends Model
{
    use HasFactory;

    protected $table = 'type_category';
    public $timestamps = false;

    protected $fillable = [
        'type',
        'active',
    ];

}

