<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BigQuestion;
use Faker\Generator as Faker;


$factory->define(BigQuestion::class, function (Faker $faker) {
    return [
        'name' => $faker->name // テスト文字列をnameに設定
    ];
});