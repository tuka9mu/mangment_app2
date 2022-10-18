<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Country::create(
            [
                  'ctry_code' => '20',
                  'ctry_b_desc' => 'النمسا',
                  'ctry_s_desc' => 'AUSTRIA',
                  'crty_iso'=>'UA'
            ]
      );
      Country::create(
            [
                  'ctry_code' => '30',
                  'ctry_b_desc' => 'استراليا',
                  'ctry_s_desc' => 'AUSTRALIA',
                  'crty_iso'=>'OU'
            ]
      );
      Country::create(
            [
                  'ctry_code' => '40',
                  'ctry_b_desc' => 'أفغانستان',
                  'ctry_s_desc' => 'AFGAHNISTAN',
                  'crty_iso'=>'AF'
            ]
      );
    }
}
