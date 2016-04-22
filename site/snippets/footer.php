<footer>
  <div class="page_wrap">
    <?php snippet("logo") ?>
    <div class="flex">
      <?php foreach ($pages->visible() as $p): ?>
        <div>
          <h5><a href="<?= $p->url() ?>"><?= $p->title() ?></a></h5>
          <ul class="nav">
            <?php foreach ($p->children()->visible() as $c): ?>
              <li>
                <a href="<?= $c->url() ?>"><?= $c->title() ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</footer>
