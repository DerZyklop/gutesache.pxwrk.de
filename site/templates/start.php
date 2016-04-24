<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <?php snippet("includes") ?>
</head>
<body>
  <?php snippet('header') ?>

  <section class="start-search">
    <main class="page-wrap">
      <div id="search_controls">
        <form>
          <h2><?= $page->claim()->kirbytext() ?></h2>
          <?php snippet("eg-search-input") ?>
        </form>
      </div>
      <?php snippet('advanced-search-controls') ?>
    </main>
  </section>
  <section>
    <div>
      <div class="flex flex-baseline">
        <div class="flex-6">
          <h2><?= $page->headline1() ?></h2>
        </div>
        <div class="flex-6">
          <h5><?= $page->headline2() ?></h5>
          <p><?= $page->text() ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php snippet("footer") ?>
</body>
</html>
