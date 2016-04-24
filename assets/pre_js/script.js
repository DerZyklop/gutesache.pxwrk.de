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
		$(".results").highlight(keyword, "highlightedtext");
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

var initClickableCheckboxList = function () {
	"use strict";
	$(".checkbox-list li input").on("change", function() {
		$(this).closest("li").toggleClass("checked");
	});
	// $(".checkbox-list li label").on("click", function() {
	// 	$(this).closest("li").find("input").toggleClass("checked");
	// });
};


var makethingsCollapsable = function() {
	"use strict";
	$(".hide").hide();
	var triggers = jQuery(".collapsable .collapsable-trigger");
	$.each(triggers, function (index, trigger) {
		var collapsableItem = jQuery(trigger).closest(".collapsable").find(".collapsable-item");
		$(trigger).on("click", function(event) {
			event.preventDefault();
			collapsableItem.toggle();
		});
	});
};


var initCards = function() {
	"use strict";
	var hideCard = function (event) {
		event.preventDefault();
		var overlay = jQuery(".overlay-placeholder");
		overlay.fadeOut();
	};
	var openCard = function (event, link) {
		if (link && link !== "#") {
			var overlay = jQuery(".overlay-placeholder");
			event.preventDefault();
			overlay.css("top", jQuery(document).scrollTop());
			overlay.css("min-height", jQuery(window).height() + "px");
			overlay.css("padding-bottom", jQuery(window).height() + "px");
			overlay.find(".inner-wrap").css("padding-top", jQuery(window).height() + "px");
			// overlay.scrollTop(jQuery(window).height() - 20);

			jQuery.get(link, function( data ) {
				overlay.find(".inner").html(data);
				overlay.show();
				overlay.scrollTop(1);
				overlay.animate({
					scrollTop: jQuery(window).height() - 20
				}, {
					duration: "300"
				});
			});
		}
	};

	jQuery(".overlay-placeholder").on("click", function (event) {
		event.preventDefault();
		if (
			jQuery(event.target).hasClass("close-overlay") ||
			jQuery(event.target).hasClass("overlay-placeholder")
		) {
			hideCard(event);
		}
	});
	jQuery(".overlay-placeholder .inner-wrap").on("click", function (event) {
		event.preventDefault();
	});

	jQuery(".results .on-open-profile a").on("click", function(event) {
		openCard(event, jQuery(this).attr("href"));
	});
	var toggleBookmarkState = function(that, activeContent, defaultContent) {
		var el = jQuery(that);
		if (el.html() === activeContent) {
			el.html(defaultContent);
			el.removeClass("active");
		} else {
			el.html(activeContent);
			el.addClass("active");
		}
	};
	jQuery(".results .bookmark").on("click", function() {
		jQuery(this).toggleClass("active");
		toggleBookmarkState(this, "★", "☆");
	});

	jQuery(".overlay-placeholder").scroll(function(event) {
		var overlay = jQuery(".overlay-placeholder");
		var overlayInnerHeight = (overlay.find(".inner-wrap").height() + jQuery(window).height());
		var reachedTop = overlay.scrollTop() === 0;
		var reachedBottom = overlayInnerHeight - overlay.scrollTop() <= 0;
		if ( reachedTop || reachedBottom ) {
			hideCard(event);
		}
	});
};


$(document).ready(function () {
	"use strict";
	setHighlighting();
	// setResponsiveHeader();
	initClickableCheckboxList();
	makethingsCollapsable();
	initCards();
});

