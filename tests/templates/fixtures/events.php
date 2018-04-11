<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$faker = Faker\Factory::create();

/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
return [
    'uuid' => $faker->uuid,
    'name' => $faker->sentence(4, true),
    'address' => $faker->address,
    'start_at' => $faker->unixTime('+' . $index++ . ' week'),
    'end_at' => $faker->unixTime('+' . $index++ . ' week'),
    'created_at' => $faker->unixTime(),
    'updated_at' => $faker->unixTime(),
    'is_active' => 1
];
