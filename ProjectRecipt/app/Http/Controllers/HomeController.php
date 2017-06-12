<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_category;
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
$tbl_vendor = tbl_category::all();
        return view('home')->with("vendor", $tbl_vendor);
    }
}
