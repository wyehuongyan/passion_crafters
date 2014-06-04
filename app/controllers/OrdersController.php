<?php
	class OrdersController extends BaseController {
		// show pages
		public function showCart() {
			return View::make("cart");
		}

		// api calls
		public function cart() {
			// show all the items in the user's cart
			$userId = 1;
			$orders = Order::where("user_id", "=", $userId)->where("processed", "=", false)->with("user")->get(); // this returns a collection
			
			// there will always only be one unprocessed order
			$order = $orders->first(); 

			return OrderItem::where("order_id", "=", $order->id)->with("product")->get();
		}

		public function addItem() {
			// laravel looks up the integer provided by $product as a key and
			// performs a lookup on the model by primary key
			
			$userId = 1;
			$orders = Order::where("user_id", "=", $userId)->where("processed", "=", false)->get(); // this returns a collection

			// there will always only be one unprocessed order
			$order = $orders->first(); 

			Log::info("productId: " .Input::get("productId"));
			$product = Product::find(Input::get("productId"));

			// add product to orderItem, then add to order
			$orderItem = new OrderItem;
			$orderItem->quantity = Input::get("productQuantity");
			$orderItem->product_id = $product->id;
			$orderItem->order_id = $order->id;
			$orderItem->save();

			Log::info("Added orderItem " .$orderItem->id. " to cart.");
			
			Response::json(array("success" => true));
		}

		public function removeItem($orderItemId) {
			OrderItem::destroy($orderItemId->id);

			Log::info("Removed orderItem " .$orderItemId. " from cart.");

			Response::json(array("success" => true));
		}
	}
?>