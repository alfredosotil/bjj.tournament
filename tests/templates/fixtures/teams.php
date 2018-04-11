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
    'name' => $faker->name,
    'profesor_name' => $faker->titleMale . ' ' .$faker->name,
    'email' => $faker->email,
    'phone_number' => $faker->phoneNumber,
    'created_at' => $faker->unixTime(),
    'updated_at' => $faker->unixTime(),
];