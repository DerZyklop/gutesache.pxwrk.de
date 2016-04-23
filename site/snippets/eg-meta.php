<ul class="flatList cleanList flex">
  <?php snippet("interactive-list-item", array(
    "key" => "Verband",
    "value" => $page->verband()
  )) ?>
  <?php snippet("interactive-list-item", array(
    "key" => "Kategorie",
    "value" => $page->kategorie()
  )) ?>
  <?php snippet("interactive-list-item", array(
    "key" => "Branche",
    "value" => $page->branche()
  )) ?>
</ul>
