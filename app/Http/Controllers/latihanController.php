<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Pertambahan($a = NULL,$b = NULL)
    {
        if($a == NULL && $b == NULL){            
        $vv = 'Silahkan Masukan nilai';
        }
        if (isset($a)) {
            $vv = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a + $b;
                $vv = $a . ' + ' .$b . '='.$c;
            }
        }
        return $vv;
    }
    public function Pengurangan($a=NULL,$b=NULL)
    {
if($a == NULL && $b == NULL){            
        $vv = 'Silahkan Masukan nilai';
        }
        if (isset($a)) {
            $vv = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a - $b;
                $vv = $a . ' - ' .$b . ' = '.$c;
            }
        }
        return $vv;
    }
    public function Pembagian($a=NULL,$b=NULL)
    {
if($a == NULL && $b == NULL){            
        $vv = 'Silahkan Masukan nilai';
        }
        if (isset($a)) {
            $vv = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a / $b;
                $vv = $a . ' : ' .$b . ' = '.$c;
            }
        }
        return $vv;
    }
    public function Perkalian($a=NULL,$b=NULL)
    {
if($a == NULL && $b == NULL){            
        $vv = 'Silahkan Masukan nilai';
        }
        if (isset($a)) {
            $vv = 'Masukan Angka Lagi';
            if (isset($b)) {
                $c = $a * $b;
                $vv = $a . ' x ' .$b . ' = '.$c;
            }
        }
        return $vv;
    }
    public function loop()
    {
        $data = [['Nama' => 'hari', 'Uang' => '100000'],
                ['Nama' => 'jamet', 'Uang' => '25000'],
                ['Nama' => 'david', 'Uang' => '1000'],
                ['Nama' => 'restu', 'Uang' => '14000'],
                ['Nama' => 'rizki', 'Uang' => '60000']

        ];
        $t = 0;
        foreach ($data as $key => $value) {
            // echo 'Nama : ' . $value["Nama"].'<hr>';
            if ($value["Uang"] >= 50000) {
            echo    'Nama : ' . $value["Nama"].'<br>';
            echo    'Kelas : Sultan'.'<br>';
            $tabungan1 = $value['Uang'] * 25 /100;
            $tabungan = $value['Uang'] - $tabungan1;
            echo 'Total Tabungan : ' .$tabungan.'<br><hr>';
                    }
            else if ($value["Uang"] >= 25000) {
            echo    'Nama : ' . $value["Nama"].'<br>';
            echo    'Kelas : Berada'.'<br>';
            $tabungan1 = $value['Uang'] * 15 /100;
            $tabungan = $value['Uang'] - $tabungan1;
            echo 'Total Tabungan : ' .$tabungan.'<br><hr>';
                    }
            else if ($value["Uang"] >= 10000) {
            echo    'Nama : ' . $value["Nama"].'<br>';
            echo    'Kelas : Kismin'.'<br>';
            $tabungan1 = $value['Uang'] * 10 /100;
            $tabungan = $value['Uang'] - $tabungan1;
            echo 'Total Tabungan : ' .$tabungan.'<br><hr>';
                    }
            else {
            echo    'Nama : ' . $value["Nama"].'<br>';
            echo    'Kelas : Kismis'.'<br>';
            $tabungan = 0;
            echo 'Total Tabungan : ' .$tabungan.'<br><hr>';
                }
        $t += $tabungan;
        }
        $f = $t;
        // dd($t);
            echo '<br>Total Tabungan : ' .number_format($f,2,",",".").'<br>';
    }
public function gaji()
    {
        $data = [['Nama' => 'Hari','Agama' => 'Muslim','Alamat' => 'Bandung','Jk' => 'L','Jabatan'=> 'Manager','Jam_kerja' => 200 ],
        ['Nama' => 'Hakuna','Agama' => 'Muslim','Alamat' => 'Bandung','Jk' => 'P','Jabatan'=> 'sekretaris','Jam_kerja' => 200 ],
        ['Nama' => 'Hana','Agama' => 'Muslim','Alamat' => 'Bandung','Jk' => 'P','Jabatan'=> 'staff','Jam_kerja' => 200 ]
                

        ];
        $t = 0;
        foreach ($data as $key => $value) {
            // echo 'Nama : ' . $value["Nama"].'<hr>';
            if ($value["Jabatan"] == 'Manager') {
                $jabatan = $value['Jabatan'];
                $gajinya= '5 JT';
                $PPN1 = '2,5%';
                $gajiumum= 5000000;
                $PPN = 0.025; 
                if ($value["Jam_kerja"] >=250) {    
                    $gajitotal = $gajiumum - ($gajiumum*$PPN);
                    $bonus1 = $gajiumum + ($gajiumum * 10/100);
                    $bonus = '10%';
                }
                elseif ($value["Jam_kerja"] >=200) {
                    $gajitotal = $gajiumum - ($gajiumum*$PPN);
                    $bonus1 = $gajiumum + ($gajiumum * 5/100);
                    $bonus = '5%';
                }
            }
            else if ($value["Jabatan"] == 'sekretaris') {
                $jabatan = $value['Jabatan'];
                $gajinya= '5 JT';
                $PPN1 = '2,5%';
                $gajiumum= 3500000;
                $PPN = 0.025; 
                if ($value["Jam_kerja"] >=250) {    
                    $gajitotal = $gajiumum - ($gajiumum*$PPN);
                    $bonus1 = $gajiumum + ($gajiumum * 10/100);
                    $bonus = '10%';
                }
                elseif ($value["Jam_kerja"] >=200) {
                    $gajitotal = $gajiumum - ($gajiumum*$PPN);
                    $bonus1 = $gajiumum + ($gajiumum * 5/100);
                    $bonus = '5%';
                }
            }
            else if ($value["Jabatan"] == 'staff') {
                $jabatan = $value['Jabatan'];
                $gajinya= '5 JT';
                $PPN1 = '2,5%';
                $gajiumum= 2500000;
                $PPN = 0.025; 
                if ($value["Jam_kerja"] >=250) {    
                    $gajitotal = $gajiumum - ($gajiumum*$PPN);
                    $bonus1 = $gajiumum + ($gajiumum * 10/100);
                    $bonus = '10%';
                }
                elseif ($value["Jam_kerja"] >=200) {
                    $gajitotal = $gajiumum - ($gajiumum*$PPN);
                    $bonus1 = $gajiumum + ($gajiumum * 5/100);
                    $bonus = '5%';
                }
            }
            echo 'Nama : '.$value['Nama'].
                'Agama : '.$value['Agama'].
                'Alamat : '.$value['Alamat'].
                'Jenis Kelamin : '.$value['Jk'].
                'Jabatan : '.$value['Jabatan'].
                'Jam Kerja : '.$value['Jam_kerja'].
                'Gaji Bersih : '.$gajinya.
                '' ;
    }
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