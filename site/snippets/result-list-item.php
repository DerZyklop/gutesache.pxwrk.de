<li>
  <div class="flex flex-start">

    <div class="flex-1">
      <span class="bookmark">☆</span><!-- ★ -->
    </div>
    <div class="flex-8">
      <h3 class="eg-name on-open-profile"><a class="no-link-highlighting" href="<?= $company->url() ?>"><?= $company->title() ?></a></h3>

      <?php snippet("interactive", array('company' => $company)) ?>

      <?php snippet("meta", array('company' => $company)) ?>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
    </div>

  </div>
</li>
