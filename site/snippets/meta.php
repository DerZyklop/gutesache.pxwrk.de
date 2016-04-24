<?php $items = [
  $company->verband(),
  $company->kategorie(),
  $company->banche()
]; ?>

<ul class="cleanList flatList flex flex-start">
  <?php if ($company->city() && (String)$company->city()->html() !== ""): ?>
    <li><h5><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> <?= $company->city() ?></a></h5></li>
  <?php endif ?>
  <?php foreach ($items as $item) : ?>
    <?php if ($item && (String)$item->html() !== ""): ?>
      <li><h5><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> <?= $item ?></h5></li>
    <?php endif ?>
  <?php endforeach; ?>
</ul>
