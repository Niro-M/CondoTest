<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxMaster extends Model
{
    use HasFactory;
    protected $fillable =['TaxID',
    'TaxName',
    'TaxPercentage',
	'Inactive'
	];

}
