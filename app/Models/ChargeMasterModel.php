<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeMasterModel extends Model
{
    use HasFactory;

    protected $fillable =['ChargeID',
    'ChargeName',
    'BillGroupID',
	'ProcessTypeID',
	'IsPeriod',
	'IsQuater',
	'IsYear',
	'UnitRate',
	'ApplicableFrom',
	'ApplicableTo',
	'TaxID',
	'TaxTypeName',
	'IsTaxInactive',
	'Inactive'
	];

}
