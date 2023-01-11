<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $key => $pronoun) {
    print_r($pronouns[$key] . (($pronouns[$key] == "He/She") ? " codes" : " code") .  "<br>");
};

$count = 1;

while ($count <= 120) {
    echo $count . '<br>';
    $count++;
}


for ($increment = 1; $increment <= 120; $increment++) {
    echo $increment . '<br>';
}

$colleagues = [
    "Arno Volts",
    "Aurélien Mariaule",
    "Aurore Lemaire",
    "Benjamin Porsont",
    "Céline Verreydt",
    "Corentin Miserque",
    "Dominique Coppée",
    "Edouard de Romrée de Vichenet",
    "Hugo Goorickx",
    "Jofrey Houyoux",
    "Jonathan Manes",
    "Jonathan Bajoux",
    "Laura Wilhelmi",
    "Lysie Soyez",
    "Marnie Benalia",
    "Mathilde Cornelis",
    "Milo Bonnet",
    "Nadim El Nakadi",
    "Nathalie Vanden Abeele",
    "Nathalie Goffette",
    "Nour Everaert",
    "Pierre Mauriello",
    "Quentin Bource",
    "Virginie Dourson"
];


foreach ($colleagues as $colleague) {
    echo $colleague . "<br>";
}

$countries = [
    "AF" => "Afghanistan",
    "AL" => "Albania",
    "DZ" => "Algeria",
    "AD" => "Andorra",
    "AO" => "Angola",
    "AG" => "Antigua and Barbuda",
    "AR" => "Argentina",
    "AM" => "Armenia",
    "AU" => "Australia",
    "AT" => "Austria"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select name="countries">
        <?php
        foreach ($countries as $key => $value) {
            echo '<option value="' . $key . '">' . $value . '</option>';
        }
        ?>
    </select>
</body>

</html>