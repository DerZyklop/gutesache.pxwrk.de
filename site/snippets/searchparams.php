<aside id="searchparams">
  <ul class="selectors">
    <li>
      <h5 class="title"><a href="#"><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> Trollololo</a></h5>
      <ul>
        <li>Trolo</li>
        <li>lololo</li>
      </ul>
    </li>
    <li>
      <h5 class="title"><a href="#"><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> Trollololo</a></h5>
    </li>
    <li>
      <h5 class="title"><a href="#"><img src="/assets/images/google-location-icon-icon-location.png" height="14px"> Trollololo</a></h5>
      <ul>
        <li>Piu</li>
        <li>Piu</li>
        <li>Piu</li>
      </ul>
    </li>
  </ul>
</aside>
<script type="text/javascript">
  jQuery('#searchparams .title').on('click', function(event) {
    event.preventDefault();
    jQuery(this).parent().find('li').toggle();
  });
</script>
