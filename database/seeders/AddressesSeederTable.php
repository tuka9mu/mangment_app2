<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'fcnt_code'=>'1',
            'name'=>'مدير'
        ]);
        Address::create([
            'fcnt_code'=>'2',
            'name'=>'مبرمج'
        ]);
        Address::create([
            'fcnt_code'=>'3',
            'name'=>'مهندس'
        ]);
    }
}
