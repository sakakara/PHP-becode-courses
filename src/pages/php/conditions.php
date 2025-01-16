
<?php
// 1.1 Clean your room Exercise 

$possible_states = array(
    1 => "health hazard",
    2 => "filthy",
    3 => "dirty",
    4 => "clean",
    5 => "immaculate"
);
$room_is_filthy = $possible_states[5];


if( $room_is_filthy == "filthy"){
	echo "Yuk, Room is dirty : let's clean it up !";
	echo "<br>Room is now clean!";
} elseif ($room_is_filthy == "dirty") {
	echo "<br>Your room is diry go clean it.";
} elseif ($room_is_filthy == "immaculate") {
    echo "Nothing to do it's clean";
}


// exercice 2

$now = date("H:i:s");

if ($now < "15:00:00") {
    echo "<br>Il est moins de 15h";
}else {   echo  "il est plus de 15h";
}


// exercice 3 


?>

<form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age">
    
    <br>
    <label for="gender">Select your gender:</label>
    <label><input type="radio" name="gender" value="male"> Male</label>
    <label><input type="radio" name="gender" value="female"> Female</label>
    <br>

    <br>
    <label for="langage">Do you speak English?</label>
    <label><input type="radio" name="langage" value="yes"> Yes</label>
    <label><input type="radio" name="langage" value="no"> No</label>

    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php

if (isset($_GET['age'])) {
    $age = $_GET['age'];

    if (isset($_GET['gender'])) {
        $gender = $_GET['gender'];
    }

    if (isset($_GET['langage'])) {
        $langage = $_GET['langage'];
    }

    if ($age < 12) {
        if ($gender == "female") {
            if ($langage == "yes") {
                echo "Hello Girl!";
            } else {
                echo "Aloha Girl!";
            }
        } else {
            if ($langage == "yes") {
                echo "Hello Boy!";
            } else {
                echo "Aloha Boy!";
            }
        }
    } elseif ($age >= 12 && $age <= 18) {
        if ($gender == "female") {
            echo "Hello Miss Teenager!";
        } else {
            echo "Hello Mister Teenager!";
        }
    } elseif ($age > 18 && $age <= 115) {
        if ($gender == "female") {
            echo "Hello Miss Adult!";
        } else {
            echo "Hello Mister Adult!";
        }
    } else {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
}
?>



<form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age">
    
    <br>
    <label for="gender">Select your gender:</label>
    <label><input type="radio" name="gender" value="male"> Male</label>
    <label><input type="radio" name="gender" value="female"> Female</label>
    <br>

    <br>
    <label for="name">What's your name?</label>
    <label><input type="input" name="name" value=""> name</label>

    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>



<?php
//exercice 6

if (isset($_GET['age'])){
    $age = $_GET['age'];

    if (isset($_GET['gender'])){
        $gender = $_GET['gender'];

        if (isset($_GET['name'])){
            $name = $_GET['name'];
        }
    }
}
if ($age >= 21 && $age <= 40) {
    echo "welcome to the team !";
} else {
    echo "Sorry you don't fit the criteria";
}






?>