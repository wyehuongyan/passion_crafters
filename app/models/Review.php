<?php
	class Review extends Eloquent {
		public function user() {
			return $this->belongsTo("User");
		}

		public function product() {
			return $this->belongsTo("Product");
		}
	}
?>