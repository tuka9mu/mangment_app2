<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\EmplBook;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function test()
     {
     return view('pages.addBook');
     }
    public function index($id)
    {
      $getbook = Book::get();
      $getemployee = Employee::find($id);
      $GetList = DB::table('empls_books')
            ->leftJoin('employees', 'employees.empl_id', '=', 'empls_books.employee')
            ->leftJoin('books', 'books.id', '=', 'empls_books.book')
            ->select('empls_books.*','empls_books.employee','empls_books.book','employees.empl_id as _empl','books.name as _name')
            ->where('employees.id','=',$id)
            ->orderBy('date','Desc')->cursorPaginate(3);
      return view('pages.addBook',[
            'data'=>$GetList,
            'books'=>$getbook,
            'employee'=>$getemployee
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'date'=>'required',
            'employee' => 'required',
            'book' => 'nullable',
      ]);

      $data = EmplBook::create([
            'date'=>$request->input('date'),
            'employee'=>$request->input('employee'),
            'book' => $request->input('book'),
      ]);



      return redirect()->back()->with('status','تم اضافة الكتاب بنجاح');

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
