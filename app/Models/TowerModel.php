<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TowerModel extends Model
{
    use HasFactory;

    protected $fillable =['TowerID',
    'ComplexID',
    'TowerName',
	'NoofFloors',
	'NoofAprtments',
	'SqftPerAprtment',
	'Inactive'
	];

}
