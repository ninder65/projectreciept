<?php

namespace App\Http\Controllers;
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

        $recieptdata = DB::table('tbl_reciepts')
            ->join('tbl_items', 'tbl_reciepts.id', '=', 'tbl_items.reciept_id')
            ->join('tbl_categories', 'tbl_items.categories_id', '=', 'tbl_categories.id')
            ->join('tbl_vendors', 'tbl_reciepts.vendor_id', '=', 'tbl_vendors.id')
            ->select('tbl_reciepts.*','tbl_categories.cname', 'tbl_items.iname','tbl_vendors.vname')
            ->get();


        return view('home')->with("recieptdatas", $recieptdata);
    }
}
