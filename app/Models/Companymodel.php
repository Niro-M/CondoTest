<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Companymodel extends Model
{
   // use HasFactory;
    protected $fillable =['CompanyID',
    'CompanyName',
    'Address',
	'Email',
	'Phone',
	'Fax',
	'VatNo',
	'SVATNo',
	'BankName',
	'BankCode',
	'BranchName',
	'BranchCode',
	'CompanyAccNo',
	'LogoImagePath',
	'Inactive'
	];

	//public $CompName;
  

  // Methods
  //function set_CompName($CompName) {
    //$this->CompName = $CompName;
  //}
}
