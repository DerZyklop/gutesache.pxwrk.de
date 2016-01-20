/* global $, document, clearTimeout, setTimeout, window */

$.fn.highlight = function(what,spanClass) {
  "use strict";
  return this.each(function(){
    var container = this,
      content = container.innerHTML,
      pattern = new RegExp('(>[^<.]*)(' + what + ')([^<.]*)','g'),
      replaceWith = '$1<span ' + ( spanClass ? 'class="' + spanClass + '"' : "" ) + '">$2</span>$3',
      highlighted = content.replace(pattern,replaceWith);
    container.innerHTML = highlighted;
  });
};
$(document).ready(function () {
  "use strict";
  $('#search_controls form').on('submit', function (e) {
    e.preventDefault();
    $('span.highlightedtext').contents().unwrap();
    var keyword = $('.eg_input_keyword').val();
    $('.result_list').highlight(keyword, 'highlightedtext');
  });

});

// $('#search_controls_alternative').on('click', function () {
//   $("body").animate({ scrollTop: 0 }, {
//     duration: "300"
//   });
// });

var scrolling = false;
$(document).on('scroll', function () {
  "use strict";
  clearTimeout(scrolling);
  scrolling = setTimeout(function () {
    if ($(this).scrollTop() > 250) {
      $('body').addClass('collapsed_search_controls');
      var hadFocus = $("#search_controls .input-group input").is(":focus");
      $("#search_controls .input-group").prependTo("#search_controls_alternative");
      if (hadFocus) {
        $("#search_controls_alternative .input-group input").focus();
      };
    } else {
      $('.collapsed_search_controls').removeClass('collapsed_search_controls');
      var hadFocus = $("#search_controls_alternative .input-group input").is(":focus");
      $("#search_controls_alternative .input-group").prependTo("#search_controls");
      if (hadFocus) {
        $("#search_controls .input-group input").focus();
      };
    }
  }, 100);
  $('#search_controls_alternative').on('click', function () {
    window.scrollTo(0, 0);
    $("#search_controls .input-group input").is(":focus");
  });
});
