<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

      protected $fillable = [
        'empl_id',
        'dept_code',
        'name',
        'degree' ,
        'address' ,
        'commdate',
        'adddate',
        'duedate',
        'locality',
        'house',
        'phone',
        'email',
        'ally',
        'state'
    ];
}
