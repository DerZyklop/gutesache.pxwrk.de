<div class="collapsable advanced-search-controls">
  <div class="inner">
    <a href="/erweiterte-suche" class="collapsable-trigger btn btn-secondary">Erweiterte Suche</a>
  </div>
  <div class="options collapsable-item hide">
    <?php foreach ($pages->find('erweiterte-suche')->children() as $category): ?>
      <div class="inner">
        <h5><?= $category->title() ?></h5>
        <ul class="flex checkbox-list">
        <?php foreach ($category->options()->yaml() as $option): ?>
          <li class="flex-4">
            <div class="fancyCheckbox">
              <input type="checkbox" value="None" id="<?= $option["key"] ?>" name="check" />
              <label for="<?= $option["key"] ?>"></label>
            </div>
            <h6><label for="<?= $option["key"] ?>"><?= $option["title"] ?></label></h6>
          </li>
        <?php endforeach ?>
        </ul>
      </div>
    <?php endforeach ?>
    <div class="btn-wrap">
      <a href="/erweiterte-suche" class="btn btn-primary">Finden</a>
    </div>
  </div>
</div>
