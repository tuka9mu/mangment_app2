<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSingle implements FromCollection
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
        return Employee::where('id',$this->id)->all();
    }
}
