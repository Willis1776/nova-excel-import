<?php

use Faker\Generator as Faker;
use Willis1776\NovaExcelImport\Tests\Fixtures\User;
use Willis1776\NovaExcelImport\Tests\Fixtures\Address;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'street' => $faker->word,
    ];
});
