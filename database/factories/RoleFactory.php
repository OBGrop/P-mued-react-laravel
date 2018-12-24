<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'can_admin' => $faker->boolean,
        'can_article' => $faker->boolean,
        'can_contact' => $faker->boolean,
        'can_office' => $faker->boolean,
        'can_field' => $faker->boolean,
        'can_report' => $faker->boolean,
        'can_entity' => $faker->boolean,
    ];
});
