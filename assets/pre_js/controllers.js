/* global $, document, clearTimeout, setTimeout, window, angular */

var guteSacheRegisterAppControllers = angular.module(
	"guteSacheRegisterAppControllers",
	[]
);
guteSacheRegisterAppControllers.factory("modifiedCompanies", function() {
	"use strict";
	console.log('oo');
	var modifiedCompanies = [];
	return modifiedCompanies;
});
guteSacheRegisterAppControllers.controller("ResultCtrl", function($scope, $rootScope, $http, modifiedCompanies){
	"use strict";
	var passiveBookmarkIcon = "fa-bookmark-o";
	var activeBookmarkIcon = "fa-bookmark";
	$scope.visibleBookmarkClass = passiveBookmarkIcon;
	$scope.modifiedCompanies = modifiedCompanies;
	$scope.toggleBookmarkState = function() {
		if (this.visibleBookmarkClass === passiveBookmarkIcon) {
			this.visibleBookmarkClass = activeBookmarkIcon;
		} else {
			this.visibleBookmarkClass = passiveBookmarkIcon;
		}
	};

	jQuery(".overlay-placeholder").scroll(function() {
		var overlay = jQuery(".overlay-placeholder");
		var overlayInnerHeight = (overlay.find(".inner-wrap").height() + jQuery(window).height());
		var reachedTop = overlay.scrollTop() === 0;
		var reachedBottom = overlayInnerHeight - overlay.scrollTop() <= 0;
		if ( reachedTop || reachedBottom ) {
			overlay.hide();
		}
	});

	$scope.openCard = function (id) {
		var overlay = jQuery(".overlay-placeholder");
		$rootScope.selctedId = id;
		console.log($rootScope.selctedId);
		var indexOfSelectedCompany = _.findLastIndex($scope.modifiedCompanies, {
			id: $rootScope.selctedId
		});
		console.log(indexOfSelectedCompany);
		var showCard = function () {
			overlay.show();
			overlay.scrollTop(1);
			overlay.animate({
				scrollTop: jQuery(window).height() - 20
			}, {
				duration: "300"
			});
		};
		if (indexOfSelectedCompany !== -1) {
			$scope.company = $scope.modifiedCompanies[indexOfSelectedCompany];
			showCard();
		} else {
			console.log("http://localhost:1337/" + id);
			$http.get("http://localhost:1337/" + id).then(function(urlResponse) {
				$rootScope.company = urlResponse.data;
				$scope.modifiedCompanies.push($rootScope.company);
				showCard();
			});
		}

		overlay.css("top", jQuery(document).scrollTop());
		overlay.css("min-height", jQuery(window).height() + "px");
		overlay.css("padding-bottom", jQuery(window).height() + "px");
		overlay.find(".inner-wrap").css(
			"padding-top",
			jQuery(window).height() + "px"
		);

	};
});


guteSacheRegisterAppControllers.controller("CardCtrl", function($scope, $rootScope, $http, modifiedCompanies){
	"use strict";
	var passiveBookmarkIcon = "fa-bookmark-o";
	var activeBookmarkIcon = "fa-bookmark";
	$scope.visibleBookmarkClass = passiveBookmarkIcon;
	$scope.modifiedCompanies = modifiedCompanies;
	$scope.logStuff = function() {
		console.log($rootScope.company);
	};
	$scope.showAddress = function() {
		var result = false;
		if (
			$rootScope.company &&
			$rootScope.company.content &&
			$rootScope.company.content.plz &&
			$rootScope.company.content.city &&
			$rootScope.company.content.street &&
			$rootScope.company.content.housenr
		) {
			result = true;
		}
		return result;
	};
	$scope.toggleBookmarkState = function() {
		if (this.visibleBookmarkClass === passiveBookmarkIcon) {
			this.visibleBookmarkClass = activeBookmarkIcon;
		} else {
			this.visibleBookmarkClass = passiveBookmarkIcon;
		}
	};
});
