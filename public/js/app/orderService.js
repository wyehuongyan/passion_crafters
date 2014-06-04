(function() {
	var app = angular.module("order-factory", [ ]);

	app.factory("OrderService", function($http){
		return {
			// get all the order items in the cart
			get : function() {
				return $http.get("api/cart");
			},

			// add an item to the cart
			add : function(productData) {
				console.log(productData);

				return $http({
					method: 'POST',
					url: 'api/cart/add_item',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(productData)
				});
			},

			// delete an item from the cart
			destroy: function(deleteId) {
				return $http.delete('api/cart/remove_item/' + deleteId);
			}
		};
	});
})();