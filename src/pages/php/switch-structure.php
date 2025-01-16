<form method="get" action="">
    <label for="note"> quel est votre note:</label>
    <input type="number" name="note" id="note" required min="0" max="20"
        value="<?php if (isset($_GET['note'])) echo $_GET['note']; ?>"> <br> <br>
    <br>
    <button type="submit">Submit</button>
</form>


<?php
if (isset($_GET['note'])) {
    $note = $_GET['note'];

    switch ($note) {
        case ($note < 4):
            echo "This work is really bad. What a dumb kid!";
            break;
        case ($note >= 5 && $note <= 9):
            echo "This is not sufficient. More studying is required.";
            break;
        case ($note == 10):
            echo "Barely enough!";
            break;
        case ($note > 10 && $note < 15):
            echo "Not bad!";
            break;
        case ($note >= 15 && $note < 19):
            echo "Bravo, bravissimo!";
            break;
        default:
            echo "Too good to be true : confront the cheater!";
            break;
    }
} else {
    echo "please enter a note";
}

?>