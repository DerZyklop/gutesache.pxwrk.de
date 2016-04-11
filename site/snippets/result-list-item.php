<li>
  <div class="eg_name"><a href="<?= $company->url() ?>"><?= $company->title() ?></a></div>
  <ul class="eg_location">
    <?php if ($company->city()): ?>
      <li><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> <?= $company->city() ?></li>
    <?php endif ?>
  </ul>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
</li>
