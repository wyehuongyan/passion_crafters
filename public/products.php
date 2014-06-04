<div>
	<div class="row">
	  <div class="col-xs-12 col-sm-6 col-md-4" ng-repeat="product in storeCtrl.products">
	    <div class="thumbnail">
	      <img ng-click="storeCtrl.showProduct(product)" ng-src="./{{product.image_url}}" style="cursor: pointer;" alt="beer!">
	      <div class="caption">
	        <p><H4>{{product.name}}</h4></p>
	        <p><H5>{{product.price | currency }}</H5></p>
	        <p><H5>{{product.rating_cache}} star rating</H5></p>
	        <div class="btn-grp">
	        	<a href ng-click="storeCtrl.showProduct(product)" class="btn btn-default" role="button">Details</a>
	        	<a href ng-click="storeCtrl.quickAddItem(product.id)" class="btn btn-lg btn-danger pull-right" role="button">Quick Add</a>
	        </div>
	        <br>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade bs-example-modal-lg" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="productModalLabel">You are currently looking at...</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-xs-5">
	        		<center>
	        			<img ng-src="./{{storeCtrl.currentProduct.image_url}}" style="width:320px; border:1px solid; border-color:lightgrey" alt="beer!">
	        		</center>
	        	</div>
	        	<div class="col-xs-7">
	        		<!-- tabs -->
	        		<ul class="nav nav-tabs nav-justified">
					  <li ng-class="{ active: storeCtrl.isSelected(1) }">
					  	<a href ng-click="storeCtrl.selectTab(1)">Info</a>
					  </li>
					  <li ng-class="{ active: storeCtrl.isSelected(2) }">
					  	<a href ng-click="storeCtrl.selectTab(2)">Reviews</a>
					  </li>
					</ul>

					<div class="infoPanel" ng-show="storeCtrl.isSelected(1)">
		        		<h2>{{storeCtrl.currentProduct.name}}</h2>
		        		<h4>{{storeCtrl.currentProduct.description }}</h4>
		        		<h4>Rating: {{storeCtrl.currentProduct.rating_cache}} stars</h4>
		        		<hr>
		        		<h3>Price: {{storeCtrl.currentProduct.price | currency }}</h3>
		        		<div class="row">
	  						<div class="col-lg-4">
				        		<div class="input-group">
				        			<span class="input-group-btn">
							        	<button class="btn btn-default" ng-disabled="storeCtrl.productQuantity == 0" ng-click="storeCtrl.decreaseProductQuantity()" type="button">-</button>
							      	</span>
							      	<input type="text" class="form-control input" name="productQuantity" ng-model="storeCtrl.productQuantity">
							      	<span class="input-group-btn">
							        	<button class="btn btn-default" ng-click="storeCtrl.increaseProductQuantity()" type="button">+</button>
							      	</span>
							    </div>
							</div>
						</div>
					</div>
					<div class="reviewsPanel" ng-show="storeCtrl.isSelected(2)">
						<br>
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							<p><b>- Jane Doe</b></p>
						</blockquote>

						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							<p><b>- Ray Stein</b></p>
						</blockquote>
					</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <a href ng-disabled="storeCtrl.productQuantity == 0" ng-click="storeCtrl.addItem(storeCtrl.currentProduct.id, storeCtrl.productQuantity)" class="btn btn-lg btn-danger" role="button">Add to Cart</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>