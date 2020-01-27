<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class KtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ktps = [
        ['np'=>'01111111','nama'=>'jamal','tgl_lahir'=>Carbon::create('1993', '01', '01'),'status'=>'Kawin','jenis_kelamin'=>'Laki-laki','agama'=>'Islam','golongan_darah'=>'RH NUll'],
        ['np'=>'01111112','nama'=>'suep','tgl_lahir'=>Carbon::create('1995', '03', '11'),'status'=>'Kawin','jenis_kelamin'=>'Laki-laki','agama'=>'Buddha','golongan_darah'=>'O+'],
        ['np'=>'01111113','nama'=>'Cecep','tgl_lahir'=>Carbon::create('1992', '06', '11'),'status'=>'Belum Kawin','jenis_kelamin'=>'Laki-laki','agama'=>'Kristen','golongan_darah'=>'AB'],
        ['np'=>'01111114','nama'=>'Saepul','tgl_lahir'=>Carbon::create('1991', '07', '12'),'status'=>'Belum Kawin','jenis_kelamin'=>'Laki-laki','agama'=>'Kong Hu Chu','golongan_darah'=>'O-'],
        ['np'=>'01111115','nama'=>'Ali','tgl_lahir'=>Carbon::create('1989', '09', '08'),'status'=>'Kawin','jenis_kelamin'=>'Laki-laki','agama'=>'Hindu','golongan_darah'=>'A+'],
        ['np'=>'01111116','nama'=>'Sakila','tgl_lahir'=>Carbon::create('2003', '03', '20'),'status'=>'Belum Kawin','jenis_kelamin'=>'Perempuan','agama'=>'Islam','golongan_darah'=>'B-'],
        ['np'=>'01111117','nama'=>'Dwi','tgl_lahir'=>Carbon::create('2002', '08', '31'),'status'=>'Kawin','jenis_kelamin'=>'Perempuan','agama'=>'Islam','golongan_darah'=>'B+'],
        ['np'=>'01111118','nama'=>'Reva','tgl_lahir'=>Carbon::create('2003', '01', '25'),'status'=>'Kawin','jenis_kelamin'=>'Perempuan','agama'=>'Islam','golongan_darah'=>'AB-'],  
        ['np'=>'01111119','nama'=>'Putri Sulis','tgl_lahir'=>Carbon::create('2004', '12', '08'),'status'=>'Belum Kawin','jenis_kelamin'=>'Perempuan','agama'=>'Islam','golongan_darah'=>'AB+-'],
        ['np'=>'01111120','nama'=>'Yoshi','tgl_lahir'=>Carbon::create('2003', '06', '17'),'status'=>'Belum Kawin','jenis_kelamin'=>'Perempuan','agama'=>'Islam','golongan_darah'=>'A-'],
    ];
    DB::table('ktps')->insert($ktps);
    }
}