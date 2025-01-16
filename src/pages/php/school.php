<form method="get" action="">
<label for="note"> quel est votre note:</label>
<input type="number" name="note">
<br>
    <input type="submit" name="submit" value="Juge moi">
</form>

<?php

if (isset($_GET['note'])){
$note = $_GET['note'];
}

if ($note < 4) {
    echo "This work is really bad. What a dumb kid!";
} 
elseif ($note >=5 && $note <= 9) {
    echo "This is not sufficient. More studying is required.";
}
elseif ($note == 10){
    echo"barely enough!";
}
elseif ($note > 10 && $note < 15){
    echo "Not bad!";
}
elseif ($note >= 15 && $note < 19){
    echo "Bravo, bravissimo!";
}
else  {
    echo "Too good to be true : confront the cheater!";
}
?>