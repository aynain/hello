<?php

use Faker\Generator as Faker;
$factory->define(App\InvoicePayment::class, function (Faker $faker) {
    return [
        'amount_paid'=>$faker->randomDigit,
        'date_paid'=>$faker->date(),
        'paid_from'=>$faker->sentence(10),
        'paid_by'=>$faker->randomDigit,
    ];
});
