<?php $logo = $page->images()->find("logo.png"); ?>
<?php if ($logo != ""): ?>
  <div class="eg-logo">
    <?= thumb($logo) ?>
  </div>
<?php endif ?>
