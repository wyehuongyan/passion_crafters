<?php
	class Order extends Eloquent {
		public function user() {
			return $this->belongsTo("User");
		}

		public function orderItems() {
			return $this->hasMany("OrderItem");
		}
	}
?>