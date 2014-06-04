(function() {
	var app = angular.module("store-contacts", [ ]);

	app.directive("contactPanel", function() {
		return {
			restrict: "E",
			templateUrl: "contact.php"
		};
	});
})();