<nav class="mainnav">
  <ul class="cleanList flex">
    <?php foreach($pages->visible() as $item): ?>
      <?php if ($item->isOpen()) {
        $iscurrent = true;
      } elseif ($site->activePage() == 'home' && $item->uri() == 'register') {
        $iscurrent = true;
      } else {
        $iscurrent = false;
      } ?>
      <li<?php ecco($iscurrent, ' class="active"') ?>>
        <div class="triangle-left"></div>
          <a href="<?php echo $item->url() ?>">
            <h5><?php echo html($item->title()) ?></h5>
          </a>
        <div class="triangle-right"></div>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
