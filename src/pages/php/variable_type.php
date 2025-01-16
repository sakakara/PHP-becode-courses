<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php 
    $name = "jason";
    $age = 28;
    $eye_color = "blue";
    $family = array(
        0 => 'jason',
        1 => 'Nathalie',
        2 => 'mimine'
    );
    $is_hungry = false;
    echo "<p>Hi my name is $name</p>";  
    echo "<p>I'm $age years old</p>";    
    echo "<p>my eyes are $eye_color </p>";
    echo "<p>The first person in my family is $family[0]</p>";
    ?>

    if ($temperature >= 15) {
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;
    }  else {
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
    }
    if ($should_i_wear_a_scarf == true) {
        grab_scarf_from_door_hanger();
    }
    cover_my_chest_with($clothes);
  </body>
</html>
