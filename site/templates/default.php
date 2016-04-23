<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <?php snippet("includes") ?>
</head>
<body>
  <div class="decoline"></div>
  <?php snippet('header') ?>

  <main class="page-wrap">
    <h2><?= $page->title() ?></h2>
    <p><?= $page->text() ?></p>
  </main>
  <?php snippet("footer") ?>
</body>
</html>
