<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentModel extends Model
{
    use HasFactory;
     protected $fillable =['ApartmentID',
    'ApartmentName',
    'TowerID',
	'FloorNo',
	'SqFeet',
	'ShareValue',
	'Inactive'
	];

}
