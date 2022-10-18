<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'name'=>'المدير العام'
        ]);
        Section::create([
            'name'=>'الادارية'
        ]);
        Section::create([
            'name'=>'الدعم التقني'
        ]);
        Section::create([
            'name'=>'البنية التحتية'
        ]);
        Section::create([
            'name'=>'تطوير البرمجيات'
        ]);
        Section::create([
            'name'=>'ادارة الانظمة'
        ]);
        Section::create([
            'name'=>'التخطيط والتطوير'
        ]);
        Section::create([
            'name'=>'امن المعلومات'
        ]);
    }
}
