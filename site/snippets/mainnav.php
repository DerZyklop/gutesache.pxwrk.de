<nav class="mainnav">
  <ul>
    <?php foreach($pages->visible() as $item): ?>
      <?php if ($item->isOpen()) {
        $iscurrent = true;
      } elseif ($site->activePage() == 'home' && $item->uri() == 'register') {
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
