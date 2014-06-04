(function(){
	var app = angular.module("store", ["store-products", "cart-products", "store-contacts"]);

	app.directive("appContainer", [ "$rootScope", "OrderService", function($rootScope, OrderService) {
		return {
			restrict: "E",
			templateUrl: "app.php",
			controller: function() {
				var panel = this;
				this.tab = 1;

				this.selectTab = function(setTab) {
					this.tab = setTab;

					// cart is selected
					if(setTab == 4) {
						// send event to cart.js to retrieve orderItems from cart
						$rootScope.$broadcast('event_cart_selected');
					}
				};

				this.isSelected = function(checkTab) {
					return this.tab === checkTab;
				};
			},
			controllerAs: "panelCtrl"
		};
	}]);
})();