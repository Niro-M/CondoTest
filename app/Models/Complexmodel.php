<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complexmodel extends Model
{
    use HasFactory;

    protected $fillable =['ComplexID',
    'CompanyID',
    'ComplexName',
	'Address',
	'Email',
	'Phone',
	'Inactive'
	];
}
