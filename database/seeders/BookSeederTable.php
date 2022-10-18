<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name'=>'كتاب شكر 1 شهر',
            'type'=>'1'
        ]);
        Book::create([
            'name'=>'كتاب شكر 6 شهر',
            'type'=>'6'
        ]);
    }
}
