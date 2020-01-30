<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
    public function Passing()
    {
        $data = 'Hello';
        return view('latihan',compact('data'));
    }
    public function Passing2()
    {
        $data =[
            ['Nama' => 'Kasman'],
            ['Nama' => 'Putri']
            ];
            return view('latihan1',['data' => $data]);
    }
    public function Passing3()
    {
            $data = Tabungan::all()->take(10);
            return view('latihan2',['data' => $data]);
    }
}