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
      <h6><a href="<?= $pages->find("blog")->url() ?>">Zu allen Beiträgen <span class="fa fa-arrow-right"></span></a></h6>
    </div>
  </div>
</section>
