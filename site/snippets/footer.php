<footer>
  <div class="page_wrap">
    <?php snippet("logo") ?>
    <div class="flex">
      <?php foreach ($pages->visible() as $p): ?>
        <div>
          <h5><?= $p->title() ?></h5>
          <ul class="nav">
            <?php foreach ($p->children()->visible() as $c): ?>
              <li>
                <a href="#"><?= $c->title() ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</footer>
