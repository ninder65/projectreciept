<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reciepts;
class RecieptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("addinvoice");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
// dd($request->all());
        // Cd::create($request->all());



        $cd =  new Reciepts();
        Reciepts::create($request->all());
        //$cd->save();
        $recieptdata = Reciepts::all();
        return view('home')->with('recieptdatas',$recieptdata);

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
        $recieptdetail= Reciepts::find($id);
        return view('detail')->with('recieptdetails',$recieptdetail);
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
        $recieptdetail= Reciepts::find($id);
        return view('edit')->with('recieptdetails',$recieptdetail);

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
        $inputs = $request->all();
        $recieptdetail = Reciepts::find($id);
        $recieptdetail->update($inputs);

        return Redirect('home');
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
        Reciepts::find($id)->delete();
        return Redirect('home');
    }
}
