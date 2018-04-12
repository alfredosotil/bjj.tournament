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
    'name' => $faker->sentence(2, true),
    'address' => $faker->address,
    'start_at' => strtotime('+' . $index++ . ' week'),
    'end_at' => strtotime('+' . $index++ . ' week'),
    'created_at' => time(),
    'updated_at' => time(),
    'is_active' => 1
];
