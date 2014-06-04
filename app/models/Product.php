<?php
	class Product extends Eloquent {
		public function reviews() {
			return $this->hasMany("Review");
		}

		public function orderItems() {
			return $this->hasMany("OrderItem");
		}
	}
?>