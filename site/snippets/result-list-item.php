<!--
<div ng-controller="MyController">
  Your name:
    <input type="text" ng-model="username">
    <button ng-click='sayHello()'>greet</button>
  <hr>
  {{greeting}}
</div> -->

<li ng-controller="ResultCtrl">
  <div class="flex flex-start">
    <div ng-click="toggleBookmarkState()">
      <h3>
        <span class="bookmark fa {{visibleBookmarkClass}}"></span>
      </h3>
    </div>
    <div class="flex-11">
      <h3 class="eg-name"><a class="no-link-highlighting" href="<?= $company->url() ?>" ng-click="openCard('<?= $company->url() ?>')" onclick="event.preventDefault()"><?= $company->title() ?></a></h3>

      <?php snippet("interactive", array('company' => $company)) ?>

      <?php snippet("meta", array('company' => $company)) ?>

      <div class="collapsable">
        <div class="collapsable-item hide">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem iusto explicabo dolor dicta. Quisquam repellat sint sunt laudantium quasi cumque fuga omnis, ducimus nesciunt debitis. Ad est, ullam porro dolorum!</p>
        </div>
        <div class="collapsable-trigger">
          <h5 class="more-info"><span class="fa fa-plus"></span> <span class="text">Kurzbeschreibung</span></h5>
        </div>
      </div>
    </div>

  </div>
</li>
