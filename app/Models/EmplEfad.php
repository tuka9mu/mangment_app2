<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmplEfad extends Model
{
    use HasFactory;
    protected $table = 'empls_efads';

    protected $fillable =[
      'employee',
      'country',
      'emp_prov',
      'emp_date_from',
      'emp_date_to'
    ];
}
