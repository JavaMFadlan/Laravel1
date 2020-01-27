<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
        ['nama'=>'jamal','nis'=>'01111111','jenis_kelamin'=>'Gender Bender','alamat'=>'Sukabumi','tgl_lahir'=>Carbon::create('1993', '01', '01'),'umur'=>'12'],
        ['nama'=>'suep','nis'=>'01111112','jenis_kelamin'=>'Hemaprhodit','alamat'=>'Alam Barzah','tgl_lahir'=>Carbon::create('1995', '03', '11'),'umur'=>'11'],
        ['nama'=>'asw','nis'=>'01111113','jenis_kelamin'=>'Unggas','alamat'=>'Akhirat','tgl_lahir'=>Carbon::create('1992', '06', '11'),'umur'=>'8'],
        ['nama'=>'OOF','nis'=>'01111114','jenis_kelamin'=>'Reptil','alamat'=>'Jahannam','tgl_lahir'=>Carbon::create('8003', '07', '12'),'umur'=>'50'],
        ['nama'=>'Augh','nis'=>'01111115','jenis_kelamin'=>'Pembelahan','alamat'=>'Jariyah','tgl_lahir'=>Carbon::create('8123', '09', '08'),'umur'=>'30']
        
    ];
    DB::table('siswa')->insert($siswa);
    }
}