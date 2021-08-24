<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessTypeModel extends Model
{
    use HasFactory;

    protected $fillable =['ProcessTypeID',
    'ProcessTypeName',
    'Inactive'
	];

}
