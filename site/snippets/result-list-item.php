<li class="flex">
  <div class="bookmark">☆</div><!-- ★ -->
  <div>
    <h3 class="eg_name"><a href="<?= $company->url() ?>"><?= $company->title() ?></a></h3>


    <?php $items = [
      $company->verband(),
      $company->kategorie(),
      $company->banche()
    ]; ?>


    <ul class="cleanList flatList flex flex-start">
      <?php foreach ($items as $item) : ?>
        <?php if ($item && (String)$item->html() !== ""): ?>
          <li><h5><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> <a href="#"><?= $item ?></a></h5></li>
        <?php endif ?>
      <?php endforeach; ?>
    </ul>


    <?php snippet("meta", array('company' => $company)) ?>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
  </div>
</li>
