<?php

$cars = [
    [
        "car_make"           => "Skoda",
        "country"            => "Чехия",
        "year_of_foundation" => 1895,
        "car_models"         => [
            [
                "model"               => "Octavia",
                "year_of_manufacture" => 1996,
            ],
            [
                "model"               => "Rapid",
                "year_of_manufacture" => 2012,
            ],
        ],
    ],
    [
        "car_make"           => "BMW",
        "country"            => "Германия",
        "year_of_foundation" => 1916,
        "car_models"         => [
            [
                "model"               => "M3",
                "year_of_manufacture" => 1986,
            ],
            [
                "model"               => "E30",
                "year_of_manufacture" => 1982,
            ],
            [
                "model"               => "i3",
                "year_of_manufacture" => 2013,
            ],
        ],
    ],
    [
        "car_make"           => "Chevrolet",
        "country"            => "США",
        "year_of_foundation" => 1911,
        "car_models"         => [
            [
                "model"               => "Camaro",
                "year_of_manufacture" => 1966,
            ],
            [
                "model"               => "Impala",
                "year_of_manufacture" => 1957,
            ],
        ],
    ],
];

foreach ($cars as $value) {
    echo "{$value['car_make']} - {$value['country']} - {$value['year_of_foundation']}<br>";
}

echo '<br>';

foreach ($cars as $value) {
    foreach ($value['car_models'] as $car_models) {
        echo "{$car_models['model']} - {$value['car_make']} ({$value['country']}) - {$car_models['year_of_manufacture']}<br>";
    }
}
