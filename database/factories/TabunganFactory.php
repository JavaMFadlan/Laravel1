<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tabungan;
use Faker\Generator as Faker;

$factory->define(Tabungan::class, function (Faker $faker) {
    return [
        'nis' => $faker->unique->RandomNumber,
        'nama' => $faker->name,
        'kelas' => $faker->numberBetween(1,5),
        'jumlah' => $faker->numberBetween(1000,100000)
    ];
});