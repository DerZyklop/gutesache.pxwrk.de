<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <?php snippet("includes") ?>
</head>
<body>
  <?php snippet('header') ?>

  <section>
    <main class="page-wrap">
      <h2><?= $page->title() ?></h2>
      <p><?= $page->text() ?></p>
    </main>
  </section>
  <?php snippet("footer") ?>
</body>
</html>
