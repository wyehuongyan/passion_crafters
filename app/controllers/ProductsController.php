<?php
	class ProductsController extends BaseController {
		// show pages
		public function showIndex() {
			return View::make("index");
		}

		public function showProducts() {
			return View::make("products");
		}

		public function showProduct(Product $product) {
			// compact creates an array out of a number of variables
			// using their names as array keys

			// show a single product
			return View::make("product", compact("product"));
		}

		// api calls
		public function products() {
			// show a JSON listing of products (all)
			return Product::all();
		}
	}
?>