<ul class="eg-meta cleanList flex">
  <?php foreach ($pages->find('erweiterte-suche')->children() as $category): ?>
    <?php $filterName = $category->uid(); ?>
    <?php if ($page->$filterName()->length()): ?>
      <li>
        <h5><?= $category->title() ?></h5>
        <h6>
          <a href="#"><?= $page->$filterName() ?></a>
        </h6>
      </li>
    <?php endif ?>
  <?php endforeach ?>
</ul>
