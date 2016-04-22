<ul class="eg_location">
  <?php foreach ($items as $item) : ?>
    <?php if ($item && (String)$item->html() !== ""): ?>
      <li><h5><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> <?= $item ?></a></h5></li>
    <?php endif ?>
  <?php endforeach; ?>
</ul>
