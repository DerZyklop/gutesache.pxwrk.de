<ul class="flatList cleanList flex">
  <li>
    <h5>Verband</h5>
    <ul class="cleanList">
      <li>
        <h6>
          <?php if ($page->verband() == "") : ?>
            -
          <?php else : ?>
            <a href="#"><?= $page->verband() ?></a>
          <?php endif ?>
        </h6>
      </li>
    </ul>
  </li>
  <li>
    <h5>Kategorie</h5>
    <ul class="cleanList">
      <li>
        <h6>
          <?php if ($page->kategorie() == "") : ?>
            -
          <?php else : ?>
            <a href="#"><?= $page->kategorie() ?></a>
          <?php endif ?>
        </h6>
      </li>
    </ul>
  </li>
  <li>
    <h5>Branche</h5>
    <ul class="cleanList">
      <li>
        <h6>
          <?php if ($page->branche() == "") : ?>
            -
          <?php else : ?>
            <a href="#"><?= $page->branche() ?></a>
          <?php endif ?>
        </h6>
      </li>
    </ul>
  </li>
</ul>
