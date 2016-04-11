<nav class="mainnav">
  <ul>
    <?php foreach($pages->visible() as $item): ?>
      <?php if ($item->isOpen()) {
        $iscurrent = true;
      } elseif ($site->activePage() == 'suche' && $item->uri() == 'suche') {
        $iscurrent = true;
      } else {
        $iscurrent = false;
      } ?>
      <li<?php ecco($iscurrent, ' class="active"') ?>>
        <a href="<?php echo $item->url() ?>">
          <?php echo html($item->title()) ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
