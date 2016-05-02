<ul class="cleanList flatList flex flex-start">
  <?php if ($company->hasCity()): ?>
    <li><h5><span class="fa fa-map-marker"></span> <?= $company->city() ?></a></h5></li>
  <?php endif ?>
  <?php if ($company->hasVerband()): ?>
    <li><h5><span class="fa fa-connectdevelop"></span> <?= $company->verband() ?></h5></li>
  <?php endif ?>
  <?php if ($company->hasKategorie()): ?>
    <li><h5><span class="fa fa-tag"></span> <?= $company->kategorie() ?></h5></li>
  <?php endif ?>
  <?php if ($company->hasBanche()): ?>
    <li><h5><span class="fa fa-black-tie"></span> <?= $company->banche() ?></h5></li>
  <?php endif ?>
</ul>
