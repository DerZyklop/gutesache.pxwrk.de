<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
  <script type="text/javascript" src="/assets/js/script.js"></script>
</head>
<body>
  <div class="decoline"></div>
  <?php snippet('header') ?>

  <main class="page_wrap">
    <h2><?= $page->title() ?></h2>
    <p><?= $page->text() ?></p>
  </main>
  <footer class="page_wrap">
    <ul>
      <li>
        <a href="#">Impressum</a>
      </li>
      <li>
        <a href="#">Kontakt</a>
      </li>
    </ul>
  </footer>
</body>
</html>
