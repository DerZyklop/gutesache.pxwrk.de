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
  <section class="header">

    <header>

      <div class="two-col">
        <div class="col-1">
          <a href="/" id="logo">
            <img src="/assets/images/logo.svg" width="230px" alt="">
          </a>
        </div>
        <div class="col-2">
          <?php snippet('usernav') ?>
        </div>
      </div>
  <!--     <div id="search_controls_alternative"></div> -->
      <div class="two-col">
        <div class="col-1"></div>
        <div class="col-2"><?php snippet('mainnav') ?></div>
      </div>

    </header>
  </section>

  <main class="page_wrap">
    <?php echo $page->text() ?>
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
