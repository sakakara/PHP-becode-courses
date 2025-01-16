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
    <label><input type="text" name="name"></label>

    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>



<?php
//exercice 6

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $name = $_GET['name'];
}
/* if ($age >= 21 && $age <= 40) {
    echo "welcome to the team !";
} else {
    echo "Sorry you don't fit the criteria";
} */

if ($age >= 21 && $age <= 40 && $gender == "female") {
    echo "Welcome to the team $name";
}

if ($age < 21 || $age > 40 || $gender == "male") {
    echo "sorry $name, you don't fit the criteria";
}





?>