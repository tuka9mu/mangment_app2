<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class BookExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths, WithEvents
{
      /**
       * @return \Illuminate\Support\Collection
       */
      protected $id;

      function __construct($id)
      {
            $this->id = $id;
      }
      public function collection()
      {
            // $book = DB::table('empls_books')->get()->where('id', $this->id);
            // return $book;
            // return EmplBook::select ('id','employee','book','date')->where('id', $this->id)->get();
            $employee = DB::table('book_export')->get()->where('id', $this->id);
            return $employee;
      }
      public function headings(): array
      {
            return [
                  "#", "اسم الموظف", "نوع الكتاب","تاريخ الكتاب"
            ];
      }
      public function styles(Worksheet $sheet)
      {
            return [
                  // Style the first row as bold text.
                  1    => ['font' => ['bold' => true, 'size' => 14]],

                  // Styling a specific cell by coordinate.
                  'B' => ['font' => ['size' => 12]],
                  'C' => ['font' => ['size' => 12]],
                  'D' => ['font' => ['size' => 12]],
            ];
      }
      public function columnWidths(): array
      {
            return ['A' => 5, 'B' => 15, 'C' => 30, 'D' => 20];
      }
      public function registerEvents(): array
      {
            return [
                  AfterSheet::class    => function (AfterSheet $event) {
                        $event->sheet->getDelegate()->setRightToLeft(true);
                        $event->sheet->getDelegate()->getStyle('A1:D1')
                              ->getFill()
                              ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                              ->getStartColor()
                              ->setARGB('97DDFF');
                  },
            ];
      }
}
