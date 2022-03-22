<?php

use Faker\Generator as Faker;
use Willis1776\NovaExcelImport\Tests\Fixtures\User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'name' => $faker->name,
        'age' => $faker->randomNumber,
    ];
});
