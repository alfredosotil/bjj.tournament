<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */

//$faker = Faker\Factory::create();

return [
    'username' => $faker->userName,
    'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
    'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('password_' . $index),
    'email' => $faker->email,
    'phone_number' => $faker->phoneNumber,
    'status' => 1,
    'created_at' => time(),
    'updated_at' => time(),
];