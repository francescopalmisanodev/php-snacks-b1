<?php
$rand_numbers = [];
while (count($rand_numbers) < 15) {
    $number = rand(1, 50);
    if (!in_array($number, $rand_numbers)) {
        $rand_numbers[] = $number;
    }
}
var_dump($rand_numbers);
