<?php
$room_is_filthy = true;
$possible_states = ["filthy", "dirty", "clean", "immaculate"];
$room_filthiness = $possible_states[3];

if ($room_filthiness == $possible_states[0]) {
    echo "Yuk, Room is Disgusting! Let's clean it up !";
    $room_is_filthy = false;
} else if ($room_filthiness == $possible_states[1]) {
    echo "Yuk, Room is dirty : let's clean it up !";
} else {
    echo "<br>Nothing to do, room is neat.";
}


$now = date("H:i:s");

if ($now > "05h00" and $now < "09h00") {
    echo "Good morning !";
} else if ($now > "09h01" and $now < "12h00") {
    echo "Good day !";
} else if ($now > "12h01" and $now < "16h00") {
    echo "Good afternoon !";
} else if ($now > "16h01" and $now < "21h00") {
    echo "Good evening !";
} else if ($now > "21h01" and $now < "04h59") {
    echo "Good night !";
}


if (isset($_GET['age']) and isset($_GET['gender']) and isset($_GET['language'])) {
    if ($_GET['age'] <= 12) {
        if ($_GET['gender'] == "female") {
            if ($_GET['language'] == "yes") echo "Hello girl !";
            if ($_GET['language'] == "no") echo "Aloha girl !";
        } else if ($_GET['gender'] == "male") {
            if ($_GET['language'] == "yes") echo "Hello boy !";
            if ($_GET['language'] == "no") echo "Aloha boy !";
        }
    } else if ($_GET['age'] > 12 and $_GET['age'] < 18) {
        if ($_GET['gender'] == "female") {
            if ($_GET['language'] == "yes") echo "Hello Miss Teen!";
            if ($_GET['language'] == "no") echo "Aloha Miss Teen!";
        } else if ($_GET['gender'] == "male") {
            if ($_GET['language'] == "yes") echo "Hello mister Teen!";
            if ($_GET['language'] == "no") echo "Aloha mister Teen!";
        }
    } else if ($_GET['age'] >= 18 and $_GET['age'] <= 115) {
        if ($_GET['gender'] == "female") {
            if ($_GET['language'] == "yes") echo "Hello Madam!";
            if ($_GET['language'] == "no") echo "Aloha Madam!";
        } else if ($_GET['gender'] == "male") {
            if ($_GET['language'] == "yes") echo "Hello Mister!";
            if ($_GET['language'] == "no") echo "Aloha Mister!";
        }
    } else if ($_GET['age'] > 115) {
        if ($_GET['language'] == "yes") echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        if ($_GET['language'] == "no") echo "Alohwaw! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}


if (isset($_GET['name']) and isset($_GET['age']) and isset($_GET['gender'])) {
    $message = "Welcome to the team !";
    if (!($_GET['gender'] == "female" and $_GET['age'] >= 21 and $_GET['age'] < 40)) {
        $message =  "Sorry you don't fit the criteria";
    }
    echo $message;
}

if (isset($_GET['quotation'])) {
    $quotation = $_GET['quotation'];
    if ($quotation <= 4) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($quotation >= 5 and $quotation < 9) {
        echo "This is not sufficient. More studying is required.";
    } else if ($quotation == 10) {
        echo "Barely enough!";
    } else if ($quotation >= 11 and $quotation <= 14) {
        echo "Not bad!";
    } else if ($quotation >= 15 and $quotation <= 18) {
        echo "Bravo, bravissimo!";
    } else if ($quotation == 19 or $quotation == 20) {
        echo "Too good to be true : confront the cheater!";
    }
}

?>

<form method="get" action="">
    <label for="age">Enter your age</label>
    <input type="" name="age">
    <label for="gender">Select your gender</label>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <label for="language">Do you speak English ?</label>
    <input type="radio" name="language" value="yes">Yes
    <input type="radio" name="language" value="no">No
    <input type="submit" name="submit" value="Greet me now">
</form>

<form method="get" action="">
    <label for="name">Enter your Name</label>
    <input type="" name="name">

    <label for="name">Enter your age</label>
    <input type="" name="age">

    <label for="gender">Select your gender</label>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male

    <input type="submit" name="submit" value="Submit">

</form>

<form action="" method="get">
    <input type="number" name="quotation"> Enter the quotation.
    <input type="submit" name="submit" value="Submit">
</form>