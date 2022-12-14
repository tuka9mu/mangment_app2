<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Monolog\Handler\ElasticaHandler;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('login.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
           
            $GetRequestCountAll = DB::table('employees')
            ->selectRaw('count(id) as all2')
            ->first();

            $GetRequestAllDegree = DB::table('degrees')
            ->selectRaw('count(id) as all2')
            ->first();
    
            $GetRequestAllAddress = DB::table('addresses')
            ->selectRaw('count(id) as all2')
            ->first();
    
            $GetRequestAllBook = DB::table('empls_books')
            ->selectRaw('count(id) as all2')
            ->first();
    
            $GetRequestAllEfads = DB::table('empls_efads')
            ->selectRaw('count(id) as all2')
            ->first();
          
    
            return view('pages.home', [
                'data' => [
                      'count_all' => $GetRequestCountAll->all2,
                      'all_degree' =>$GetRequestAllDegree->all2,
                      'all_address' =>$GetRequestAllAddress->all2,
                      'all_book' =>$GetRequestAllBook->all2,
                      'all_efad' =>$GetRequestAllEfads->all2
                ]]);

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'the password incorrect'
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
      $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'usertype' =>'boolean',
            'password' => 'required|min:6',
        ]);
      
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'usertype'=>$request['usertype'],
            'password' => Hash::make($request['password'])
        ]);

        $data['usertype'] =! empty($request->usertype);

        return view('login.login');
          
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        $GetRequestCountAll = DB::table('employees')
        ->selectRaw('count(id) as all2')
        ->first();

        $GetRequestAllDegree = DB::table('degrees')
        ->selectRaw('count(id) as all2')
        ->first();

        $GetRequestAllAddress = DB::table('addresses')
        ->selectRaw('count(id) as all2')
        ->first();

        $GetRequestAllBook = DB::table('empls_books')
        ->selectRaw('count(id) as all2')
        ->first();

        $GetRequestAllEfads = DB::table('empls_efads')
        ->selectRaw('count(id) as all2')
        ->first();
      

        return view('pages.home', [
            'data' => [
                  'count_all' => $GetRequestCountAll->all2,
                  'all_degree' =>$GetRequestAllDegree->all2,
                  'all_address' =>$GetRequestAllAddress->all2,
                  'all_book' =>$GetRequestAllBook->all2,
                  'all_efad' =>$GetRequestAllEfads->all2
            ]]);

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
