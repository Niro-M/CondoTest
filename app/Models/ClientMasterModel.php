<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMasterModel extends Model
{
    use HasFactory;
     protected $fillable =['ClientID',
    'ClientName',
    'BillingName',
	'IsTanent',
	'Phone',
	'Fax',
	'Email',
	'WebLoginUserName',
	'WebLoginPassword',
	'ImagePath',
	'BillStartingFrom',
	'Inactive',
	'MapNo'

	];
}
