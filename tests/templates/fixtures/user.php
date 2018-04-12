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
    'username' => $faker->userName,
    'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
    'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('password_' . $index),
    'email' => $faker->email,
    'phone_number' => $faker->phoneNumber,
    'status' => 1,
    'created_at' => $faker->unixTime(),
    'updated_at' => $faker->unixTime(),
    'uuid' => $faker->uuid,
    'name' => $faker->name,
    'last_name' => $faker->lastName,
    'birthday' => strtotime('-' . $index++ . ' year'),
    'total_points' => 0,
];