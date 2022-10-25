<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
class ExportSingle implements FromCollection, WithHeadings,WithStyles,WithColumnWidths,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $id;

 function __construct($id) {
        $this->id = $id;
 }
    public function collection()
    {
      $employee = DB::table('export')->get()->where('id',$this->id);
      return $employee;
    }
    public function headings(): array
    {
        return ["#","الرمز الوظيفي","اسم الموظف","الدرجة الوظيفية",
        "تاريخ تغيير العنوان","تاريخ الاستحقاق الجديد"];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true,'size'=>14]],

            // Styling a specific cell by coordinate.
            'B' => ['font' => ['size' => 12]],
            'C' => ['font' => ['size' => 12]],
            'D' => ['font' => ['size' => 12]],
            'E' => ['font' => ['size' => 12]],
            'F' => ['font' => ['size' => 12]],
        ];
    }
    public function columnWidths(): array
    {
        return ['A' => 5, 'B' => 15, 'C' => 30, 'D' => 20,'E' => 20,'F' => 20];
    }
    public function registerEvents(): array
    {
       return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
                $event->sheet->getDelegate()->getStyle('A1:F1')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('97DDFF');
            },
        ];
    }
}
