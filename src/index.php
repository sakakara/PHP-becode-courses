<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/styles.css">
  <title>Home | BeCode PHP Courses</title>
</head>

<body>
  <header>
    <h1><a href="/" target="_blank">BeCode PHP Courses</a></h1>
    <nav>
      <ul>
        <li><a href="http://localhost:8081" target="_blank">phpMyAdmin</a></li>
        <li><a href="http://localhost:8082" target="_blank">Adminer</a></li>
        <li><a href="/info.php" target="_blank">PHP info</a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <section class="pages-list">

      <h2 class="pages-list-title">Available Pages</h2>
      <ul class="pages-list-ul">
        <?php
        $pagesDir = __DIR__ . '/pages';
        if (is_dir($pagesDir) && count(scandir($pagesDir)) > 2) {
          $folders = scandir($pagesDir);
          foreach ($folders as $folder) {
            if ($folder !== '.' && $folder !== '..' && is_dir($pagesDir . '/' . $folder)) {
              echo '<li><a href="/pages/' . $folder . '" target="_blank" class="btn btn-outline-primary">' . ucfirst($folder) . '</a></li>';
            }
          }
        } else {
          echo '<p>No pages available.</p>';
        }
        ?>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> - sakakara's BeCode PHP Courses</p>
    <p>
      <a href="https://github.com/sakakara" target="_blank">
        <img src="https://img.shields.io/badge/View_on_GitHub-100000?logo=github&logoColor=white"
          alt="View on GitHub">
      </a>
    </p>
  </footer>
</body>

</html>