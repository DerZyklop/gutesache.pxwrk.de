/* global $, document, clearTimeout, setTimeout, window */

var setHighlighting = function() {
	"use strict";
	$.fn.highlight = function(what, spanClass) {
		return this.each(function(){
			var container = this,
				content = container.innerHTML,
				pattern = new RegExp("(>[^<.]*)(" + what + ")([^<.]*)", "g"),
				replaceWith = "$1<span " + ( spanClass ? 'class="' + spanClass + '"' : "" ) + '">$2</span>$3',
				highlighted = content.replace(pattern, replaceWith);
			container.innerHTML = highlighted;
		});
	};

	$("#search_controls form").on("submit", function (e) {
		e.preventDefault();
		$("span.highlightedtext").contents().unwrap();
		var keyword = $(".eg_input_keyword").val();
		$(".result_list").highlight(keyword, "highlightedtext");
	});
};

// $('#search_controls_alternative').on('click', function () {
//   $("body").animate({ scrollTop: 0 }, {
//     duration: "300"
//   });
// });

// var setResponsiveHeader = function() {
// "use strict";
// var scrolling = false;
// $(document).on("scroll", function () {
// 	var hadFocus;
// 	clearTimeout(scrolling);
// 	scrolling = setTimeout(function () {
// 		if ($(this).scrollTop() > 250) {
// 			$("body").addClass("collapsed_search_controls");
// 			hadFocus = $("#search_controls .input-group input").is(":focus");
// 			$("#search_controls .input-group").prependTo("#search_controls_alternative");
// 			if (hadFocus) {
// 				$("#search_controls_alternative .input-group input").focus();
// 			}
// 		} else {
// 			$(".collapsed_search_controls").removeClass("collapsed_search_controls");
// 			hadFocus = $("#search_controls_alternative .input-group input").is(":focus");
// 			$("#search_controls_alternative .input-group").prependTo("#search_controls");
// 			if (hadFocus) {
// 				$("#search_controls .input-group input").focus();
// 			}
// 		}
// 	}, 100);
// 	$("#search_controls_alternative").on("click", function () {
// 		window.scrollTo(0, 0);
// 		$("#search_controls .input-group input").is(":focus");
// 	});
// });
// };

var setClickableCheckboxList = function () {
	"use strict";
	$(".checkbox-list li input").on("change", function() {
		$(this).parent().toggleClass("checked");
	});
};


var makethingsCollapsable = function() {
	"use strict";
	$(".hide").hide();
	var triggers = jQuery(".collapsable .collapsable-trigger");
	$.each(triggers, function (index, trigger) {
		var collapsableItem = jQuery(trigger).closest(".collapsable").find(".collapsable-item");
		$(trigger).on("click", function(event) {
			console.log(collapsableItem);
			event.preventDefault();
			collapsableItem.toggle();
		});
	});
};


$(document).ready(function () {
	"use strict";
	setHighlighting();
	// setResponsiveHeader();
	setClickableCheckboxList();
	makethingsCollapsable();

	var hideOverlay = function (event) {
		event.preventDefault();
		var overlay = jQuery(".overlay-placeholder");
		overlay.fadeOut();
	};

	jQuery(".overlay-placeholder").on("click", function (event) {
		event.preventDefault();
		if (
			jQuery(event.target).hasClass("close-overlay") ||
			jQuery(event.target).hasClass("overlay-placeholder")
		) {
			hideOverlay(event);
		}
	});
	jQuery(".overlay-placeholder .inner-wrap").on("click", function (event) {
		event.preventDefault();
	});

	$(".results .result_list .eg_name a").on("click", function(event) {
		event.preventDefault();
		var link = jQuery(this).attr("href");
		var overlay = jQuery(".overlay-placeholder");
		overlay.css("top", jQuery(document).scrollTop());
		overlay.css("min-height", jQuery(window).height() + "px");
		overlay.css("padding-bottom", jQuery(window).height() + "px");
		overlay.find(".inner-wrap").css("padding-top", jQuery(window).height() + "px");

		jQuery.get(link, function( data ) {
			overlay.find(".inner").html(data);
			overlay.show();
			overlay.scrollTop(jQuery(window).height() - 20);
		});

		overlay.scroll(function() {
			var overlayInnerHeight = (overlay.find(".inner-wrap").height() + jQuery(window).height());
			if (
				overlay.scrollTop() === 0 ||
				overlayInnerHeight - overlay.scrollTop() <= 0
			) {
				hideOverlay(event);
			}
		});

	});


});

