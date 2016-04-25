<nav class="usernav no-link-highlighting">
  <ul class="cleanList flex flex-end">
    <?php foreach ($pages->find("user-area")->children()->visible() as $item): ?>
      <li>
        <h5><a href="#">
          <?php if ($item->pageicon()->length()): ?>
            <span class="fa <?= $item->pageicon() ?>"></span>
          <?php endif ?>
          <?= $item->title() ?>
        </a></h5>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
