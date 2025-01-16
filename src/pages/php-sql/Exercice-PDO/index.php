<?php
$host = "becode-php-mysql";
$userName = "jason";
$password = "jason";
$dbName = "jason-db";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $userName, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection error: " . $e->getMessage();
}

try {
  $bdd = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $userName, $password);
  $pdo->exec("CREATE TABLE IF NOT EXISTS weatherapp(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `city` varchar(255), 
    `high` int, 
    `low` int)");
  echo 'Table `weatherapp` successfully created.';
} catch (PDOException $e) {
  echo "Table creation error: " . $e->getMessage();
}

try {
  $bdd = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $userName, $password);
  $pdo->exec("TRUNCATE TABLE weatherapp");
  $pdo->exec("INSERT INTO weatherapp(`city`, `high`, `low`) VALUES
    ('Bruxelles', 27, 13),
    ('Liège', 25, 15),
    ('Namur', 26, 15),
    ('Charleroi', 25, 12),
    ('Bruges', 28, 16)
  ");
} catch (PDOException $e) {
  echo "Table insertion initial data error : " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['city'], $_POST['high'], $_POST['low'])) {
  $city = $_POST['city'];
  $high = $_POST['high'];
  $low = $_POST['low'];

  try {
    $stmt = $pdo->prepare("INSERT INTO weatherapp(city, high, low) VALUES(?, ?, ?)");
    $stmt->execute([$city, $high, $low]);
  } catch (PDOException $e) {
    echo "Table new data insertion error: " . $e->getMessage();
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
  $cityToDelete = $_POST['delete'];

  try {
    $stmt = $pdo->prepare("DELETE FROM weatherapp WHERE id = ?");
    $stmt->execute([$cityToDelete]);
  } catch (PDOException $e) {
    echo "Table deletion error: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather app</title>
</head>

<body>
  <section>
    <table class="weather-table">
      <thead>
        <th>City</th>
        <th>High</th>
        <th>Low</th>
      </thead>
      <tbody>
        <?php
        $stmt = $pdo->query("SELECT id, city, high, low FROM weatherapp");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $row['city'] . "</td>";
          echo "<td>" . $row['high'] . "</td>";
          echo "<td>" . $row['low'] . "</td>";
          echo '<td>
            <form action="" method="post">
            <button type="submit" name="delete" value="' . $row['id'] . '">Delete</button></button>
            </form>
          </td>';
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </section>
  <section>
    <form action="" method="post">
      <label for="city">City:
        <input type="text" name="city" placeholder="City" required>
      </label>
      <label for="high">High:
        <input type="number" name="high" placeholder="High temperature" required>
      </label>
      <label for="low">Low:
        <input type="number" name="low" placeholder="Low temperature" required>
      </label>
      <button type="submit">Add</button>
    </form>

  </section>
</body>

</html>