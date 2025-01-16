<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="container"></div>
  <form method="post" action="excuse.php">
    <label><input type="text" name="name" placeholder="name">name of the child </label>
    <br>
    <p>Select the child's gender</p>
    <label for="gender"><input type="radio" id="gender" name="gender" value="boy">Boy</label>
    <label for="gender"><input type="radio" id="gender" name="gender" value="girl">Girl</label>
    <br>
    <label><input type="text" name="teacher" placeholder="teacher">Name of the teacher</label>
    <br>
    <p>Select your reason :</p>
    <label for="illness"><input type="radio" id="illness" name="reason" value="illness">Illness</label>
    <label for="death"><input type="radio" id="death" name="reason" value="death">Death of a pet (or family member)</label>
    <label for="activity"><input type="radio" id="activity" name="reason" value="activity">Extra-curicular activity</label>
    <label for="other"><input type="radio" id="other" name="reason" value="other">Other excuse</label>
    <input type="submit" name="submit" value="My excuse">

  </form>
</body>

</html>