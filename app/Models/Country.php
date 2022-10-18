<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';

    protected $fillable =[
      'ctry_code',
      'ctry_b_desc',
      'ctry_s_desc',
      'crty_iso'
    ];
}
