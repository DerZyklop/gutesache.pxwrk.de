<div class="collapsable advanced-search-controls">
  <div class="inner">
    <a href="/erweiterte-suche" class="collapsable-trigger btn btn-secondary">Erweiterte Suche</a>
  </div>
  <div class="options collapsable-item hide">
    <?php foreach ($pages->find('erweiterte-suche')->children() as $category): ?>
      <section>
        <h5><?= $category->title() ?></h5>
        <ul class="col-30-30-30 checkbox-list">
        <?php foreach ($category->options()->yaml() as $option): ?>
          <li><input id="<?= $option["key"] ?>" type="checkbox"><h5><label for="<?= $option["key"] ?>"><?= $option["title"] ?></label></h5></li>
        <?php endforeach ?>
        </ul>
      </section>
    <?php endforeach ?>
    <a href="/erweiterte-suche" class="btn btn-secondary">Finden</a>
  </div>
</div>
