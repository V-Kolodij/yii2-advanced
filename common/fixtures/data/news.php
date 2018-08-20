<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/31/18
 * Time: 10:39 AM
 */
require_once dirname(__DIR__) . '/../../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();

return[
    'news' =>[
        'title' => $faker->sentence,
        'description' => $faker->text($maxNbChars = 100),
        'text' => $faker->text,
        'user_id' => $faker->randomDigit,
    ],
    'news2' =>[
        'title' => $faker->sentence,
        'description' => $faker->text($maxNbChars = 100),
        'text' => $faker->text,
        'user_id' => $faker->randomDigit,
    ],
    'news3' =>[
        'title' => $faker->sentence,
        'description' => $faker->text($maxNbChars = 100),
        'text' => $faker->text,
        'user_id' => $faker->randomDigit,
    ],
    'news4' =>[
        'title' => $faker->sentence,
        'description' => $faker->text($maxNbChars = 100),
        'text' => $faker->text,
        'user_id' => $faker->randomDigit,
    ],
    'news5' =>[
        'title' => $faker->sentence,
        'description' => $faker->text($maxNbChars = 100),
        'text' => $faker->text,
        'user_id' => $faker->randomDigit,
    ],

];