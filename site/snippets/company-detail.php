<!-- <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"> -->
<main ng-controller="CardCtrl">
  <div class="flex">
    <div class="flex-12">
      <div class="flex flex-start">

        <div>
          <h2 ng-click="toggleBookmarkState()"><span class="bookmark fa {{visibleBookmarkClass}}"></span></h2>
        </div>
        <div class="flex-11">
          <h2 ng-click="logStuff()">{{company.title}}</h2>
        </div>

      </div>
    </div>
    <div class="flex-8">
      <div class="content-section">
        <ul class="eg-meta cleanList flex">
          <li ng-show="company.content.branche">
            <h5>Branche</h5>
            <h6>{{company.content.branche}}</h6>
          </li>
          <li ng-show="company.content.kategorie">
            <h5>Kategorie</h5>
            <h6>{{company.content.kategorie}}</h6>
          </li>
          <li ng-show="company.content.verband">
            <h5>Verband</h5>
            <h6>{{company.content.verband}}</h6>
          </li>
        </ul>
      </div>
      <div ng-show="company.content.text" class="content-section">
        <p>{{company.content.text}}</p>
      </div>
      <div ng-show="company.content.praeambel" class="content-section">
        <h5>Präambel</h5>
        <?= kirbytext("{{company.content.praeambel}}") ?>
      </div>
      <div ng-show="company.content.geschaeftszweck" class="content-section">
        <h5>Geschäftszweck</h5>
        <?= kirbytext("{{company.content.geschaeftszweck}}") ?>
      </div>
      <div ng-show="company.content.historie" class="content-section">
        <h5>Historie</h5>
        <?= kirbytext("{{company.content.historie}}") ?>
      </div>
    </div>
    <div class="flex-1">
    </div>
    <div class="flex-3 eg-sidebar">

      <div class="content-section">
        <div class="eg-logo">
          <img src="{{company.contentUrl}}/logo.png">
        </div>
      </div>

      <div ng-show="showAddress()" class="content-section">
        <strong><span class="fa fa-map-marker"></span> Adresse</strong><br />
        {{company.content.plz}} {{company.content.city}}<br ng-show="company.content.plz || company.content.city" />
        {{company.content.street}} {{company.content.housenr}}<br ng-show="company.content.street || company.content.housenr" />
      </div>


        <div ng-show="company.content.mail && company.content.website" class="content-section">
          <strong><span class="fa fa-link"></span> Im Internet</strong><br />
          <a ng-show="company.content.mail" href="mailto:{{company.content.website}}">{{company.content.website}} ➡</a><br>
          <a ng-show="company.content.mail" href="mailto:{{company.content.mail}}">{{company.content.mail}} ➡</a>
        </div>

      <div ng-show="company.content.poc_avatar" class="content-section eg-poc_avatar">
        <img src="{{company.contentUrl}}/{{company.content.poc_avatar}}">
        <?php // echo thumb($avatar) ?>
      </div>
      <div ng-show="company.content.poc_name" class="content-section">
        <?php if ("{{company.content.poc_gender}}" == "female"): ?>
          <strong><span class="fa fa-user"></span> Ansprechpartnerin</strong>
          <br>
          Frau {{company.content.poc_firstname}} {{company.content.poc_name}}
        <?php else : ?>
          <strong><span class="fa fa-user"></span> Ansprechpartner</strong>
          <br>
          Herr {{company.content.poc_firstname}} {{company.content.poc_name}}
        <?php endif ?>
      </div>
      <div ng-show="{{company.content.facebook}}" class="content-section">
        <strong><span class="fa fa-facebook"></span> Facebook</strong><br />
        {{company.content.facebook}}
      </div>
      <div ng-show="{{company.content.twitter}}" class="content-section">
        <strong><span class="fa fa-twitter"></span> Twitter</strong><br />
        <a href="https://twitter.com/{{company.content.twitter}}">@{{company.content.twitter}}</a>
      </div>
      <div ng-show="{{company.content.pinterest}}" class="content-section">
        <strong><span class="fa fa-pinterest"></span> Pinterest</strong><br />
        {{company.content.pinterest}}
      </div>
      <div ng-show="{{company.content.linkedin}}" class="content-section">
        <strong><span class="fa fa-linkedin"></span> Linkedin</strong><br />
        {{company.content.linkedin}}
      </div>
    </div>
  </div>
</main>
