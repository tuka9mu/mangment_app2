<?php

namespace App\Http\Controllers;

use Excel;
use App\Models\Book;
use App\Imports\Date;
use App\Models\Degree;
use App\Models\Address;
use App\Models\EmplBook;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\ExportSingle;
use App\Exports\ExportEmployee;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{

      public function exportEmployee(){

        return Excel::download(new ExportEmployee, 'employees.xlsx');

      }
      public function exportSingle(Request $request){

        return Excel::download(new ExportSingle($request->id), 'employee.xlsx');

      }

       public function index()
      {
            $GetBook = EmplBook::get();
            $GetDegrees = Degree::get();
            $GetAddresses = Address::get();
            $GetList = DB::table('employees')
                  // ->leftJoin('degrees', 'degrees.id', '=', 'employees.degree')
                  // ->leftJoin('addresses', 'addresses.id', '=', 'employees.address')
                  // ->select('employees.*')
                  ->orderBy('adddate')->cursorPaginate(6);

            $blogs = DB::select("CALL calculate()");
            

            // dd($GetList);
            return view('pages.table', [
                  'employees' => $GetList,
                  'degrees' => $GetDegrees,
                  'addresses' => $GetAddresses,
                  'books' => $GetBook,
                  'blog' => $blogs
            ]);
      }
      // UPDATE employees set commdate=DATE_ADD(commdate, INTERVAL -2 MONTH) where empl_id=1234;
      public function search(Request $request)
      {

            $GetDegrees = Degree::get();
            $GetAddresses = Address::get();
            $Get = DB::table('employees')
            ->leftJoin('degrees', 'degrees.id', '=', 'employees.degree')
            ->leftJoin('addresses', 'addresses.id', '=', 'employees.address')
            ->select('employees.*', 'employees.name', 'degrees.name as _degree', 'addresses.name as _address')
            ->where('employees.name', 'like',  $request->name . '%')
            ->paginate(6);

        return view('pages.table',[
            'employees'=>$Get,
            'degrees' => $GetDegrees,
            'addresses' => $GetAddresses
        ]);

      }



      public function store(Request $request)
      {
            $request->validate([
                  'empl_id'=>'required',
                  'dept_code'=>'nullable',
                  'name' => 'required',
                  'degree' => 'nullable',
                  'address' => 'nullable',
                  'commdate'=>'Date',
                  'adddate'=>'Date',
                  'state'=>'string|nullable',
                  'locality'=>'nullable',
                  'ally'=>'nullable',
                  'house'=>'nullable',
                  'phone'=>'number|max:11|nullable',
                  'email'=>'email|nullable'
            ]);

            $data = Employee::create([
                  'empl_id'=>$request->input('empl_id'),
                  'dept_code'=>$request->input('dept_code'),
                  'name' => $request->input('name'),
                  'degree' => $request->input('degree'),
                  'address' => $request->input('address'),
                  'commdate' => $request->input('commdate'),
                  'adddate' => $request->input('adddate'),
                  'state'=>$request->input('state'),
                  'locality'=>$request->input('locality'),
                  'ally'=>$request->input('ally'),
                  'house'=>$request->input('house'),
                  'phone'=>$request->input('phone'),
                  'email'=>$request->input('email')
            ]);

            return redirect()->back()->with('status','تم اضافة الموظف بنجاح');

      }

      public function edit($id)
    {
      $GetBook= Book::get();
        $GetDegrees = Degree::get();
        $GetAddresses = Address::get();
        $employee = Employee::find($id);
        return view('pages.addEmplyee',[
            'employee'=>$employee,
            'degrees' => $GetDegrees,
            'addresses' => $GetAddresses,
            'books'=>$GetBook

        ]);
    }

      public function update(Request $request)
      {
        $request->validate([
            'empl_id'=>'required',
            'dept_code'=>'nullable',
            'name' => 'required',
            'degree' => 'nullable',
            'address' => 'nullable',
            'commdate'=>'Date',
            'adddate'=>'Date',
            'state'=>'string|nullable',
            'locality'=>'nullable',
            'ally'=>'nullable',
            'house'=>'nullable',
            'phone'=>'max:20|nullable',
            'email'=>'nullable'


      ]);

      $employee = Employee::findOrFail($request->id);
      $employee->empl_id = $request->empl_id;
      $employee -> name = $request-> name;
      $employee -> degree = $request-> degree;
      $employee -> address = $request-> address;
      $employee -> commdate = $request-> commdate;
      $employee -> adddate = $request-> adddate;
      $employee -> state = $request-> state;
      $employee -> locality = $request-> locality;
      $employee -> ally = $request-> ally;
      $employee -> house = $request-> house;
      $employee -> phone = $request-> phone;
      $employee -> email = $request-> email;
      $employee->save();
      return redirect('/')->with('status','تم تعديل بيانات الموظف بنجاح');
      }



}
