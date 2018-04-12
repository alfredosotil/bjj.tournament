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
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'phone_number' => $faker->phoneNumber,
    'total_matches' => 0,
    'type' => $faker->randomElement(['mesas', 'arbitros','operaciones'])
];