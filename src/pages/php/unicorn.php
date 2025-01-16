<form method="get" action="">
    <label for="species">Select your species:</label>
    <label><input type="radio" name="species" value="Human"> Human</label>
    <label><input type="radio" name="species" value="Cat"> Cat</label>
    <label><input type="radio" name="species" value="Unicorn"> Unicorn</label>
    <br>
    <input type="submit" name="submit" value="My species">
</form>

<?php

if (isset($_GET['species'])) {
    $species = $_GET['species'];

    $gif_url = ($species == "Human") ? "https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExNWgwajJoc3ZuY2tjaThhanIzeXBlbHQzeDg1cWV4d2kwYzI0bWt0MiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/vvBsAcNyjKk6iOkVx3/giphy.webp" : 
        (($species == "Cat") ? "https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif" : 
        "https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExczQ3M3NxdGlsemQxOHJpdGRmeWhyNzdkMmVpdDdleG5zZ3BkamNjbCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/2A75RyXVzzSI2bx4Gj/giphy.webp");

    echo "<h3>Your selected species: $species</h3>";
    echo "<img src='$gif_url' alt='$species GIF' />";
}
?>
