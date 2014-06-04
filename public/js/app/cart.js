(function() {
	var app = angular.module("cart-products", ["order-factory"]);

	app.directive("cartProducts", [ "OrderService", "$rootScope", function(OrderService, $rootScope) {
		return {
			restrict: "E",
			templateUrl: "cart.php",
			controller: function($scope) {
				var cart = this;
				cart.orderItems = [ ];
				cart.productData = {};
				cart.editMode = false;

				cart.tab = 1;
				cart.currentProduct = null;
				cart.currentOrderItem = null;

				// event listeners
				$scope.$on('event_cart_selected', function () {
					cart.getCart();
				});

				$scope.$on('event_item_added', function () {
					$("#cartBadge").text(parseInt($("#cartBadge").text(), 10) + 1);
				});

				// mutators
				cart.setEditMode = function(setEditMode) {
					cart.editMode = setEditMode;
				};

				cart.selectTab = function(setTab) {
					cart.tab = setTab;
				};

				// accessors
				cart.isSelected = function(checkTab) {
					return cart.tab === checkTab;
				};

				// retrieve cart items
				cart.getCart = function() {
					OrderService.get().success(function(data){
						cart.orderItems = data;
					});
				};

				// show a single product in cart
				// sorry, did not practise D.R.Y here...
				cart.showProduct = function(orderItem) {
					$("#cartProductModal").modal({
						show: true,
						keyboard: false
					});

					cart.currentProduct = orderItem.product;
					cart.currentOrderItem = orderItem;
				};

				// retrieve cart items on immediate load
				OrderService.get().success(function(data){
					if(data.length !== 0) {
						$("#cartBadge").text(data.length);
					} else {
						$("#cartBadge").text(0);
					}
				});

				// remove item from cart
				cart.removeItem = function(deleteId) {
					OrderService.destroy(deleteId).success(function(data){
						// if successful refresh the cart
						OrderService.get().success(function(data){
							cart.orderItems = data;

							$("#cartBadge").text(parseInt($("#cartBadge").text(), 10) - 1);
						});
					});
				};
			},
			controllerAs: "cartCtrl"
		};
	}]);
})();