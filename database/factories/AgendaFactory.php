<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Agenda::class, function (Faker $faker) {
    return [  'nome' => $faker->name, 'telefone' => 999999  ]; });

