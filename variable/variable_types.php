<?php
$first_name = "Jonathan";
$age = 36;
$eyes_color = "brown";
$family_names = array(
    0 => 'Jonathan',
    1 => 'Aylin',
);
?>
<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <p><?php echo "Hi! My name is " . $first_name . "."; ?></p>
    <p><?php echo "I am " . $age . " years old."; ?></p>
    <p><?php echo "My eyes are " . $eyes_color . "."; ?></p>
    <p><?php echo "The first person in my family is  " . $family_names[1] . "."; ?></p>
</body>

</html>