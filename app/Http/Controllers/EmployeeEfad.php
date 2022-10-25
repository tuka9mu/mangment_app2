<?php

namespace App\Http\Controllers;
use Excel;
use App\Models\Degree;
use App\Models\Address;
use App\Models\Country;
use App\Models\EmplEfad;
use App\Models\Section;
use App\Models\Employee;
use App\Exports\EfadExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeEfad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportSingle(Request $request){

      return Excel::download(new EfadExport($request->id), 'efad.xlsx');

    }
    public function test()
     {
    $GetDegrees = Degree::get();
      $GetSections = Section::get();
      $GetAddresses = Address::get();
      $GetEmployee = Employee::get();
      $GetList = DB::table('employees')
                  ->orderBy('adddate')->limit(3)->get();
        $blogs = DB::select("CALL calculate()");
        return view('pages.EfadCard', [
            'blog' => $blogs,
            'employees' =>  $GetEmployee,
            'degrees' => $GetDegrees,
            'addresses' => $GetAddresses,
            'sections' => $GetSections,
            'employees' =>$GetList

      ]);
     }

    public function index($id)
    {

      $getcountry = Country::get();
      $getemployee = Employee::find($id);
      $GetList = DB::table('empls_efads')
            ->leftJoin('employees', 'employees.empl_id', '=', 'empls_efads.employee')
            ->leftJoin('countries', 'countries.id', '=', 'empls_efads.country')
            ->select('empls_efads.*','empls_efads.employee','empls_efads.country','employees.empl_id as _empl','countries.ctry_b_desc as _code')
            ->where('employees.id','=',$id)
            ->orderBy('emp_date_from','desc')->cursorPaginate(5);
      return view('pages.AddEfad',[
            'data'=>$GetList,
            'countries'=>$getcountry ,
            'employee'=>$getemployee
      ]);
                 
    }
    public function search(Request $request)
    {

      $getcountry = Country::get();
      $search = $request->get('search');
      $getemployee = Employee::get();
      $GetList = DB::table('empls_efads')
            ->leftJoin('employees', 'employees.empl_id', '=', 'empls_efads.employee')
            ->leftJoin('countries', 'countries.id', '=', 'empls_efads.country')
            ->select('empls_efads.*','empls_efads.employee','empls_efads.country','employees.empl_id as _empl','employees.name as _name','countries.ctry_b_desc as _code')
            ->where('_name','like','%'.$search.'%')->get();
      return view('pages.AddEfad',[
            'data'=>$GetList,
            'countries'=>$getcountry ,
            'employee'=>$getemployee
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $request->validate([
            'employee'=>'required',
            'country' => 'required',
            'emp_prov' => 'nullable',
            'emp_date_from'=>'nullable',
            'emp_date_to'=>'nullable'
      ]);

      $data = EmplEfad::create([
            'employee'=>$request->input('employee'),
            'country'=>$request->input('country'),
            'emp_prov' => $request->input('emp_prov'),
            'emp_date_from' => $request->input('emp_date_from'),
            'emp_date_to' => $request->input('emp_date_to'),
      ]);



      return redirect()->back()->with('status','تم اضافة الايفاد بنجاح');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
