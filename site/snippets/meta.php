
<ul class="cleanList flatList flex">
  <?php if ($company->city() && (String)$company->city()->html() !== ""): ?>
    <li><h5><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> <?= $company->city() ?></a></h5></li>
  <?php endif ?>
</ul>
