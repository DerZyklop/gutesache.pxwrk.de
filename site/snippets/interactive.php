<ul class="cleanList flatList flex flex-start">
  <li><h5 class="on-open-profile"><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> <a href="<?= $company->url() ?>">Profil</a></h5></li>
  <li><h5 class="on-open-profile"><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> <a href="mailto:<?= $company->mail() ?>">Kontakt</a></h5></li>
  <?php
    if (!function_exists("addhttp")) {
      function addhttp($url) {
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
          $url = "http://" . $url;
        }
        return $url;
      }
    }
  ?>
  <li><h5 class="on-open-profile"><a href="<?= addhttp($company->website()) ?>">➡ Webseite</a></h5></li>
</ul>
