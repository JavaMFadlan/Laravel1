<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungan = Customer::all();
        return $tabungan;
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
    public function store(Request $request,$a = 'default',$b = 'default',$c = 'default',$d = 'default',$e = 'default',$f = 'default',$g = 'default')
    {
        $tabungan = new Customer;
        $tabungan->code = $a;
        $tabungan->name = $b;
        $tabungan->email = $c;
        $tabungan->city = $d;
        $tabungan->country = $e;
        $tabungan->address = $f;
        $tabungan->contact_number = $g;
        $tabungan->save();
        return $tabungan;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tabungan = Customer::find($id);
        return $tabungan;
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
    public function update(Request $request, $id,$a = 'default',$b = 'default',$c = 'default',$d = 'default',$e = 'default',$f = 'default',$g = 'default')
    {
        $tabungan = Customer::find($id);
        $tabungan->code = $a;
        $tabungan->name = $b;
        $tabungan->email = $c;
        $tabungan->city = $d;
        $tabungan->country = $e;
        $tabungan->address = $f;
        $tabungan->contact_number = $g;
        $tabungan->save();
        return $tabungan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabungan = Customer::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}