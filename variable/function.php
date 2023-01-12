<?php
$message = "According to a researcher (sic) at Cambridge University, 
it doesn't matter in what order the letters in a word are, 
the only important thing is that the first and last letter be at the right place. 
The rest can be a total mess and you can still read it without problem. 
This is because the human mind does not read every letter by itself but the word as a whole.";

function shuffle_string($string)
{
    $array = explode(' ', $string);
    $returned_array = [];

    foreach ($array as $word) {
        if (strlen($word) < 3) {
            $returned_array[] = $word;
        } else {
            $returned_array[] = substr($word, 0, 1) . str_shuffle(substr($word, 1, -1)) . substr($word, -1);
        }
    }

    print_r(join(' ', $returned_array));
}

//shuffle_string($message);


function capitalize_word($word)
{
    echo ucfirst($word);
}

//capitalize_word("hello");

//echo date("Y");

//echo date("d M Y H:i:s");

function sum($a, $b)
{
    if (is_numeric($a) and is_numeric($b)) {
        return $a + $b;
    } else {
        return "Error = argument is not a number";
    }
}

//echo sum(15, 5);

function acronym($string)
{
    $words = explode(" ", $string);
    for ($i = 0; $i < count($words); $i++) {
        echo substr($words[$i], 0, 1);
    }
}

//acronym("In Code We Trust");

function replace_ae($string)
{
    return str_replace("ae", "æ", $string);
}

//echo replace_ae("caecotrophie");
//echo replace_ae("chaenichthys");

function replace_æ($string)
{
    return str_replace("æ", "ae", $string);
}

//echo replace_æ("chænichthys");
//echo replace_æ("chænichthys");

function feedback($message, $css_class)
{
    $returned_value = '<div class="' . $css_class . '">' . $message . '</div>';
    return $returned_value;
}

echo feedback("Incorrect email address", "error");
echo feedback("This is a warning", "warning");
echo feedback("This is an info", "info");


function random_word($minLength, $maxLength)
{

    $length = mt_rand($minLength, $maxLength);
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return '<p>' . ucfirst($randomString) . '</p>';
}

echo random_word(1, 5);
echo random_word(7, 15);

function de_capitalize($string)
{
    return '<p>' . ucfirst(strtolower($string)) . '</p>';

}

echo de_capitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

function calculate_cone_volume($ray, $height)
{
    $volume = round($ray * $ray * pi() * $height * (1 / 3), 2);

    $message = 'The volume of a cone which ray is ' . $ray . 'cm and height is ' . $height . 'cm = ' . $volume . 'cm<sup>3</sup><br/>';

    return $message;
}

echo calculate_cone_volume(5, 2);
echo calculate_cone_volume(3, 4);
