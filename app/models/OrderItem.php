<?php
	class OrderItem extends Eloquent {
		public function order() {
			return $this->belongsTo("Order");
		}

		public function product() {
			return $this->belongsTo("Product");
		}
	}
?>