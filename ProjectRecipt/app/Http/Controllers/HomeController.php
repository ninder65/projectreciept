<?php

namespace App\Http\Controllers;
use App\Reciepts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   // $tbl_vendor = tbl_category::all();

        $recieptdata = Reciepts::all();



        return view('home')->with("recieptdatas", $recieptdata);
    }
}
