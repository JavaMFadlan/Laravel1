<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class tabunganController extends Controller
{
        public function Index()
    {
        $tabungan = \App\Tabungan::all();
        return $tabungan;
    }
        public function Show($id)
    {
        $tabungan = \App\Tabungan::find($id);
        return $tabungan;
    }
        public function Store($a = NULL,$b = NULL,$c = NULL,$d = NULL)
    {
        $tabungan = new Tabungan;
        $tabungan->nis = $a;
        $tabungan->nama = $b;
        $tabungan->kelas = $c;
        $tabungan->jumlah = $d;
        $tabungan->save();
        return $tabungan;
    }
    public function Update($id=NULL,$a = NULL,$b = NULL,$c = NULL,$d = NULL)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis = $a;
        $tabungan->nama = $b;
        $tabungan->kelas = $c;
        $tabungan->jumlah = $d;
        $tabungan->save();
        return $tabungan;
    }
    public function Destroy($id=NULL)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}