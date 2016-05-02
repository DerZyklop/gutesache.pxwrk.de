<ul class="cleanList flatList flex flex-start">
  <li><h5 class="on-open-profile"><a href="<?= $company->url() ?>"><span class="fa fa-users"></span> Profil</a></h5></li>
  <li><h5><a href="mailto:<?= $company->mail() ?>">E-Mail <span class="fa fa-envelope-o"></span></a></h5></li>
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
  <li><h5><a href="<?= addhttp($company->website()) ?>">Webseite <span class="fa fa-external-link"></span></a></h5></li>
  <!-- <li><h5 class=""><a href="<?= $company->website() ?>">Merken <span class="fa fa-external-link"></span></a></h5></li> -->
</ul>
