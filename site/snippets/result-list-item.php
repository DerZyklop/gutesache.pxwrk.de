<li>
  <div class="flex flex-start">

    <div class="">
      <h3>
        <span class="bookmark fa fa-bookmark-o"></span>
      </h3>
    </div>
    <div class="flex-11">
      <h3 class="eg-name on-open-profile"><a class="no-link-highlighting" href="<?= $company->url() ?>"><?= $company->title() ?></a></h3>

      <?php snippet("interactive", array('company' => $company)) ?>

      <?php snippet("meta", array('company' => $company)) ?>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
    </div>

  </div>
</li>
