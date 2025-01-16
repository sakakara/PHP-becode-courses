<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $teacher = htmlspecialchars($_POST['teacher']);
    $reason = htmlspecialchars($_POST['reason']);
    $gender = htmlspecialchars($_POST['gender']);

    $now = date('l, \t\h\e jS \of F Y');
    $pronoun = $gender == "girl" ? "she" : "he";

    $excuse = [
        'illness' => [
            0 =>  $pronoun . "'s sick",
            1 => $pronoun . " has a fever",
            2 => $pronoun . " has a headache",
            3 => $pronoun . " has a stomach ache",
            4 => $pronoun . " has a sore throat"
        ],
        'death' => [
            0 => "my dog died",
            1 => "my cat died",
            2 => "my fish died",
            3 => "my hamster died",
            4 => "my rabbit died"
        ],
        'activity' => [
            0 => $pronoun . " has a football match",
            1 => $pronoun . " has a basketball match",
            2 => $pronoun . " has a swimming competition",
            3 => $pronoun . " has a chess tournament",
            4 => $pronoun . " has a dance competition",
        ],
        'other' => [
            0 => $pronoun . " has a dentist appointment",
            1 => $pronoun . " has a doctor's appointment",
            2 => $pronoun . " has a family reunion",
            3 => $pronoun . " has a wedding",
            4 => $pronoun . " has a birthday party",
        ]
    ];

    $selected_excuse = $excuse[$reason][array_rand($excuse[$reason])];

    $polite_phrase = "Thank you for your understanding and your support.";

    $excuse_data = array(
        'date' => $now,
        'child_name' => $name,
        'teacher_name' => $teacher,
        'excuse' => $selected_excuse,
        'polite_phrase' => $polite_phrase
    );
    $_SESSION['excuse_data'] = $excuse_data;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/preview.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2 class="Title">Excuse note</h2>
        <p class="info">
            <strong>Date: </strong><?php echo $excuse_data['date']; ?>
        </p>
        <p class="info">
            <strong>Dear <?php echo $excuse_data['teacher_name']; ?>,</strong>
        </p>
        <p class="message">
            We would like to inform you that <?php echo $excuse_data['child_name']; ?> will not be able to come to school this <?php echo $excuse_data['date']; ?> because <?php echo $excuse_data['excuse']; ?>
        </p>
        <p class="closing">
            <?php echo $excuse_data['polite_phrase']; ?>
        </p>
        <p class="closing">Best regards</p>
        <p class="closing">The parents of <?php echo $excuse_data['child_name']; ?>. </p>
    </div>
</body>

</html>