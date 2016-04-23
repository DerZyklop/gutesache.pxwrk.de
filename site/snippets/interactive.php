<ul class="flatList">
  <?php foreach ($items as $item) : ?>
    <?php if ($item && (String)$item->html() !== ""): ?>
      <li><h5><img src="/assets/images/google-location-icon-icon-location.png" height="1em"> <a href="#"><?= $item ?></a></h5></li>
    <?php endif ?>
  <?php endforeach; ?>
</ul>
