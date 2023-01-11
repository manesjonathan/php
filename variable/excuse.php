<?php
$fake_excuse = '';
$date = date('l\,\ \t\h\e d F Y');
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : null;
$teacher = (isset($_POST['teacher'])) ? $_POST['teacher'] : null;
$reason = (isset($_POST['reason'])) ? $_POST['reason'] : null;
$footer = 'Sincerely, ' . '<br>' .  'His father.';


switch ($reason) {
    case 'illness':
        $fake_excuse = 'I apologize for my ' . $gender . ' ' . $_POST['name'] .  ' absence today, ' .
            ($gender == "boy" ? 'he' : ($gender == 'girl' ? 'she' : '')) . ' was under the weather and I have kept ' . ($gender == "boy" ? 'him' : ($gender == 'girl' ? 'her' : '')) . ' home to rest. '
            . ($gender == "boy" ? 'he' : ($gender == 'girl' ? 'she' : '')) . ' will be out for a few days. 
            Will update you on ' . ($gender == "boy" ? 'his' : ($gender == 'girl' ? 'her' : '')) . ' recovery. Thank you for your understanding.';
        break;

    case 'pet-death':
        $fake_excuse = 'I apologize for my ' . $gender . ' ' . $_POST['name'] .  ' absence today, 
            we recently lost ' . ($gender == "boy" ? 'his' : ($gender == 'girl' ? 'her' : '')) . ' beloved pet and ' . ($gender == "boy" ? 'he' : ($gender == 'girl' ? 'she' : '')) . ' is going through a difficult time. ' .
            ($gender == "boy" ? 'He' : ($gender == 'girl' ? 'She' : '')) . ' will be back to school as soon as possible.';
        break;

    case  'extra-curricular':
        $fake_excuse = 'I apologize for my ' . $gender . ' ' . $_POST['name'] .  ' absence today, 
            it is due to an extra-curricular activity. Please let me know if there is any make-up work that ' . ($gender == "boy" ? 'he' : ($gender == 'girl' ? 'she' : '')) . ' needs to complete.';
        break;

    case 'coding':
        $fake_excuse = 'I apologize for my ' . $gender . ' ' . $_POST['name'] .  ' absence today, 
            that is participating in a coding competition that is important for ' . ($gender == "boy" ? 'his' : ($gender == 'girl' ? 'her' : '')) . ' professional development. ' .
            ($gender == "boy" ? 'He' : ($gender == 'girl' ? 'She' : '')) . ' will make up for any missed work upon ' .
            ($gender == "boy" ? 'his' : ($gender == 'girl' ? 'her' : '')) . ' return.';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fake Excuse Notes Generator application">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/image/favicon.ico">

    <title>Fake Excuse Notes Generator</title>
</head>

<body>
    <header>
        <h1>Fake Excuse Notes Generator</h1>
    </header>
    <aside>
        <form action="" method="post">
            <label for="name">Name of the child:
            <input type="text" name="name">
            </label>
            <br>
            <label for="gender">Gender:
            <input type="radio" name="gender" value="boy">Boy
            <input type="radio" name="gender" value="girl">Girl
            </label>
            <br>
            <label for="teacher">Name of the teacher:
            <input type="text" name="teacher">
            </label>
            <br>
            <label for="reason">Reason of absence:
            <select name="reason">
                <option value="illness">Illness</option>
                <option value="pet-death">Pet death</option>
                <option value="extra-curricular">Extra curricular</option>
                <option value="coding">Coding</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Generate">

        </form>
    </aside>
    <main>
        <section class="fake-excuse">
            <?php
            if (isset($_POST['name']) and isset($_POST['gender']) and isset($_POST['teacher']) and isset($_POST['reason'])) {
                echo '<p>' . $date . '</p>';
                echo '<p>Dear ' . $teacher . ',</p>';
                echo '<p>' . $fake_excuse . '</p>';
                echo '<p>' . $footer . '</p>';
            }
            ?>
        </section>

    </main>
</body>

</html>