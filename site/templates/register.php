<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <?php snippet("includes") ?>
</head>
<body>
  <?php snippet('header') ?>

  <section class="start-search no-vertival-margin">
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
  <?php $about = $pages->find("about"); ?>
  <section>
    <div>
      <div class="flex flex-baseline">
        <div class="flex-6">
          <h2><?= $about->headline1() ?></h2>
        </div>
        <div class="flex-6">
          <h5><?= $about->headline2() ?></h5>
          <p>
            <?= $about->text() ?>
          </p>
          <p>
            <h6><a href="<?= $about->url() ?>">Mehr über uns <span class="fa fa-arrow-right"></span></a></h6>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div>
      <h2 class="section-headline"><?= $pages->find("blog")->title() ?></h2>
      <div class="flex">
        <?php if ($pages->find("blog")): ?>
          <?php foreach ($pages->find("blog")->children()->visible() as $teasercontent): ?>
            <div class="flex-4">
              <?php snippet(
                "teaser",
                array("item" => $teasercontent)
              ) ?>
            </div>
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <div style="text-align: center">
        <h6><a href="#">Zu allen Beiträgen <span class="fa fa-arrow-right"></span></a></h6>
      </div>
    </div>
  </section>
  <?php snippet("footer") ?>
</body>
</html>
