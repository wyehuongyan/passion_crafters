<?php
	class User extends Eloquent {
		public function orders() {
			return $this->hasMany("Order");
		}

		public function reviews() {
			return $this->hasMany("Review");
		}
	}
?>