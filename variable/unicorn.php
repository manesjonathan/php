<?php

if (isset($_POST['kind'])) {
    $kind = $_POST['kind'];
    $image_src = $kind == "human" ? "https://media.giphy.com/media/2shBNJSPTrpWvoXfpD/giphy.gif" : ($kind == "cat" ? "https://media.giphy.com/media/VbnUQpnihPSIgIXuZv/giphy.gif" : ($kind == "unicorn" ? "https://media.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif" : ""));

    echo '<img src="' . $image_src .  '">';
}

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
    <form action="" method="post">
        <label for="kind">Are you a human, a cat or a unicorn ?</label>
        <input type="radio" name="kind" value="human">Human
        <input type="radio" name="kind" value="cat">Cat
        <input type="radio" name="kind" value="unicorn">Unicorn
        <input type="submit" value="Submit">
    </form>
</body>

</html>