
<li>
  <h5><?= $key ?></h5>
  <ul class="cleanList">
    <li>
      <h6>
        <?php if ($value == "") : ?>
          -
        <?php else : ?>
          <a href="#"><?= $value ?></a>
        <?php endif ?>
      </h6>
    </li>
  </ul>
</li>
