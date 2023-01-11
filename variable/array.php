<?php 
$family_members = ["Mother", "Father", "Sister", "Brother"];
$favorite_recipes = ["Pasta", "Pizza", "Hamburger"];
$favorite_movies = ["Matrix 1", "Matrix 2", "Matrix 3"];

echo '<pre>';
print_r($family_members);
print_r($favorite_recipes);
print_r($favorite_movies[0]);
echo '</pre>';

array_push($favorite_movies, "Rambo");
print_r($favorite_movies);

$favorite_movies[] = "Harry Potter";
var_dump($favorite_movies);

$favorite_movies["The best one"] = "Supreme";
print_r($favorite_movies["The best one"]);

echo '<pre>';
print_r($favorite_movies["The best one"]);
echo '</pre>';

var_dump($favorite_movies["The best one"]);

$me = array(
    "firstname" => "Jonathan",
    "lastname" => "Manes",
    "age" => 36,
    "favorite_season" => "Autumn",
    "soccer" => false,
    "lol_gamer" => true,
    "favorite_movies" => $favorite_movies
);

$me['hobbies'] = ["Gaming", "Coding", "Sport"];

$me['mother'] = array(
    "firstname" => "Chantal",
    "lastname" => "Timms",
    "age" => 59,
    "hobbies" => ["Knit", "Dogs", "Animal cause"],
    "favorite_recipes" => $favorite_recipes
);

echo '<pre>';
print_r($me);
echo '</pre>';
$me['hobbies'][] = "Taxidermy";

$mother_hobbies_count = count($me['mother']['hobbies']);
$me_hobbies_count = count($me['hobbies']);

print_r($mother_hobbies_count + $me_hobbies_count);


$me['lastname'] = "Durand";
print_r($me);


$soulmate = array(
    "firstname" => "Aylin",
    "lastname" => "Tz",
    "age" => 29,
    "favorite_season" => "Summer",
    "soccer" => false,
    "lol_gamer" => true,
    "favorite_movies" => null
);

$soulmate['hobbies'] = ["Gaming", "Youtube", "Make-up", "Medical"];

$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';


$web_development = array(
    'frontend' => [],
    'backend' => []
);

array_push($web_development['frontend'], "xhtml");
array_push($web_development['backend'], "Ruby on Rails");
array_push($web_development['frontend'], "CSS");
array_push($web_development['frontend'], "Flash");
array_push($web_development['frontend'], "Javascript");

$web_development = str_replace('xhtml', 'html', $web_development['frontend']);

$web_development = array_diff($web_development, ['Flash']);

//Below do the same
/* if(($key = array_search("Flash", $web_development)) !== false) {
    unset($web_development[$key]);
} */

var_dump($web_development);

?>