<aside class="searchparams" class="advanced-search-controls">
  <h5>Erweiterte Suche</h5>
  <ul class="selectors">
    <?php foreach ($pages->find('erweiterte-suche')->children() as $category): ?>
      <li class="collapsable">
        <h5 class="title collapsable-trigger">
          <a class="no-link-highlighting" href="#"><span class="fa fa-plus"></span> <?= $category->title() ?></a>
        </h5>
        <ul class="checkbox-list collapsable-item hide">
          <?php foreach ($category->options()->yaml() as $option): ?>
            <li>
              <div class="fancyCheckbox">
                <input type="checkbox" value="None" id="<?= $option["key"] ?>" name="check" />
                <label for="<?= $option["key"] ?>"></label>
              </div>
              <h6><label for="<?= $option["key"] ?>"><?= $option["title"] ?></label></h6>
            </li>
          <?php endforeach ?>
        </ul>
      </li>
    <?php endforeach ?>
  </ul>
</aside>
