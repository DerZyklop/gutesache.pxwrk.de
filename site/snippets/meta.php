<ul class="cleanList flatList flex flex-start">
  <?php if ($company->city() && (String)$company->city()->html() !== ""): ?>
    <li><h5><span class="fa fa-map-marker"></span> <?= $company->city() ?></a></h5></li>
  <?php endif ?>
  <?php if ($company->verband() && (String)$company->verband()->html() !== ""): ?>
    <li><h5><span class="fa fa-connectdevelop"></span> <?= $company->verband() ?></h5></li>
  <?php endif ?>
  <?php if ($company->kategorie() && (String)$company->kategorie()->html() !== ""): ?>
    <li><h5><span class="fa fa-tag"></span> <?= $company->kategorie() ?></h5></li>
  <?php endif ?>
  <?php if ($company->banche() && (String)$company->banche()->html() !== ""): ?>
    <li><h5><span class="fa fa-black-tie"></span> <?= $company->banche() ?></h5></li>
  <?php endif ?>
</ul>
