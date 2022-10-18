<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
            Degree::create(
                  [
                        'name' => 'الدرجة الاولى',
                        'intervel' => '1'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة الثانية',
                        'intervel' => '5'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة الثالثة',
                        'intervel' => '5'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة الرابعة',
                        'intervel' => '5'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة الخامسة',
                        'intervel' => '5'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة السادسة',
                        'intervel' => '4'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة السابعة',
                        'intervel' => '4'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة الثامنة',
                        'intervel' => '4'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة التاسعة',
                        'intervel' => '1'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة العاشرة',
                        'intervel' => '1'
                  ]
            );
            Degree::create(
                  [
                        'name' => 'الدرجة الحادي عشر',
                        'intervel' => '1'
                  ]
            );
      }
}
