<?php
function set_characters()
{
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+';
    $characters = $letters . strtoupper($letters) . $numbers . $symbols;

    return $characters;
}


function password_generator($length)
{
    $password = '';

    $characters = set_characters();

    $total_characters = mb_strlen($characters);

    while (mb_strlen($password) < $length) {
        $random_index = rand(0, $total_characters - 1);

        $random_character = $characters[$random_index];

        $password .= $random_character;
    }

    return $password;
}
