(function() {
	var app = angular.module("store-products", ["order-factory"]);

	app.directive("productPanel", [ "$http", "OrderService", "$timeout", "$rootScope", function($http, OrderService, $timeout, $rootScope) {
		return {
			restrict: "E",
			templateUrl: "products.php",
			controller: function($scope) {
				var store = this;
				store.products = [ ];
				store.orderItems = [ ];
				store.popoverTimeout = null;
				store.tab = 1;
				store.currentProduct = null;
				store.productQuantity = 1;

				// event listeners
				$scope.$on('event_product_modal', function (event, args) {
					var product = args.product;

					console.log("product received: " +product);
					store.showProduct(product);
				});

				// for adding items to cart
				store.productData = {};

				store.selectTab = function(setTab) {
					store.tab = setTab;
				};

				store.isSelected = function(checkTab) {
					return store.tab === checkTab;
				};

				// set productQuantity
				store.increaseProductQuantity = function() {
					store.productQuantity = parseInt(store.productQuantity, 10) + 1;
				};

				store.decreaseProductQuantity = function() {
					if(store.productQuantity !== 0) {
						store.productQuantity = parseInt(store.productQuantity, 10) - 1;
					}
				};

				// initialise popover
				store.initCartPopover = function(htmlContent) {
					$("#cartNavBtn").popover({
						html : true,
						content: function() {
							return htmlContent;
						},
						placement: "bottom",
						trigger: "manual"
					});

					var popover = $('#cartNavBtn').data('bs.popover');
					popover.options.content = htmlContent;
					$("#cartNavBtn").popover("show");
				};

				store.showProduct = function(product) {
					$("#productModal").modal({
						show: true,
						keyboard: false
					});

					// this sets this class's attribute to 1, not what is about to be sent!
					store.productQuantity = 1;

					store.currentProduct = product;
				};

				// controller quick add item
				store.quickAddItem = function(productId) {
					// auto assume quantity is 1 in quick add item
					store.addItem(productId, 1);
				};

				// controller add item method
				store.addItem = function(productId, productQuantity) {
					store.productData.productId = productId;
					store.productData.productQuantity = productQuantity;

					// just hide the modal anyway
					$("#productModal").modal("hide");

					// add item to cart using service
					OrderService.add(store.productData).success(function(data){
						// if successful 
						console.log("Item added successfully.");

						// broadcast to app.js to update badge
						$rootScope.$broadcast('event_item_added');

						var product = store.products[store.productData.productId - 1];
						console.log(product.image_url);

						var htmlContent =	"<div class='media'>" +
												"<a class='pull-left'>" +
													"<img class='media-object' src='./images/thumbs/" +product.image_url+ "' style='width:64px'>" +
												"</a>" +
												"<div class='media-body'>" +
													"<b>" + product.name + "</b>" +
													"<br>has been added to cart!" +
												"</div>" +
											"</div>";

						store.initCartPopover(htmlContent);

						// fade away
						$('#cartNavBtn').on("shown.bs.popover", function () {
							// stop previous timer
							clearTimeout(store.popoverTimeout);
							
							store.popoverTimeout = setTimeout(function() {
								$("#cartNavBtn").popover("hide");
							}, 3000);
						});
					}).error(function(data){
						// if failure
						console.log("Item was not added successfully.");
						console.log(data);
					});
				};

				// product api
				$http.get("api/products").success(function(data){
					// promise object returned
					store.products = data;
				});
			},
			controllerAs: "storeCtrl"
		};
	}]);

	// angular has limitTo
	// lets create startFrom
	app.filter("startFrom", function() {
		return function(input, start) {
			start = +start; // parse to int
			return input.slice(start);
		};
	});
})();