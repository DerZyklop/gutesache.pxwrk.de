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
  <div class="page_wrap">
    <main>
      <?php snippet('search-controls') ?>
      <?php snippet('advanced-search-controls') ?>
      <div class="result_counter"><span class="counter">56</span> Ergebnisse</div>
      <hr>
      <?php snippet('results') ?>
      <div class="clearit"></div>
    </main>
    <footer>
      <ul>
        <li>
          <a href="#">Impressum</a>
        </li>
        <li>
          <a href="#">Kontakt</a>
        </li>
      </ul>
    </footer>
  </div>
</body>
</html>
