<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmplBook extends Model
{
    use HasFactory;

protected $table = 'empls_books';

    protected $fillable =[
      'date',
      'employee',
      'book'
    ];
}
