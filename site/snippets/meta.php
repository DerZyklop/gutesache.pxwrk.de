<ul class="eg_location">
  <?php foreach ($items as $item) : ?>
    <?php if ($item && (String)$item->html() !== ""): ?>
      <li><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> <?= $item ?></a></li>
    <?php endif ?>
  <?php endforeach; ?>
</ul>
