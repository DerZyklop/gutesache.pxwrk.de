<li>
  <h3 class="eg_name"><a href="<?= $company->url() ?>"><?= $company->title() ?></a></h3>
  <ul class="eg_location">
    <?php $meta_items = [
      $company->city(),
      $company->verband(),
      $company->kategorie(),
      $company->banche()
    ]; ?>
    <?php foreach ($meta_items as $item) : ?>
      <?php if ($item && (String)$item->html() !== ""): ?>
        <li><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> <?= $item ?></li>
      <?php endif ?>
    <?php endforeach; ?>
  </ul>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
</li>
