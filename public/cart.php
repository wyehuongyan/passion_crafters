<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Your cart currently contains...</h3>
  </div>
  <div class="panel-body">
  	<h4 ng-hide="cartCtrl.orderItems.length !== 0">Nothing! Quick, go grab some craft beers now!</h4>
    <div class="row" ng-repeat="orderItem in cartCtrl.orderItems">
    	<div class="media col-xs-10">
		  <a class="pull-left" href ng-click="cartCtrl.showProduct(orderItem)">
		    <img class="media-object" ng-src="./images/thumbs/{{orderItem.product.image_url}}" style="width:64px" alt="">
		  </a>
		  <div class="media-body">
		    <h4 class="media-heading"><a href ng-click="cartCtrl.showProduct(orderItem)">{{orderItem.product.name}}</a></h4>
		    <p>
		    	{{orderItem.product.description}}
		    	<br>
		    	{{orderItem.product.price | currency}}
		    </p>
		  </div>
		</div>
		<div class="col-xs-2">
			<div class="btn-grp btn-group-sm pull-right">
				<div class="row">
					<div class="col-lg-10">
		        		<div class="input-group">
		        			<span class="input-group-btn">
					        	<button class="btn btn-default" ng-disabled="orderItem.quantity == 0 || !cartCtrl.editMode" ng-click="orderItem.quantity = orderItem.quantity - 1" type="button">-</button>
					      	</span>
					      	<input type="text" class="form-control input" ng-disabled="!cartCtrl.editMode" name="cartProductQuantity" ng-model="orderItem.quantity">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" ng-disabled="!cartCtrl.editMode" ng-click="orderItem.quantity = orderItem.quantity - 1 + 2" type="button">+</button>
					      	</span>
					    </div>
					</div>
				</div>
				&nbsp<a href ng-click="cartCtrl.setEditMode(true)">edit</a>
				&nbsp<a href ng-click="cartCtrl.removeItem(orderItem.id)">delete</a>
				&nbsp<a href="#">update</a>
			</div>
		</div>
	</div>
  </div>
</div>

<div class="btn-grp pull-right">
	<a href="#" class="btn btn-default" role="button">Delete All</a>
	<a href="#" class="btn btn-default" role="button">Update All</a>
	<a href="#" class="btn btn-lg btn-success" role="button">Proceed to Checkout</a></p>
</div>

<div class="modal fade bs-example-modal-lg" id="cartProductModal" tabindex="-1" role="dialog" aria-labelledby="cartProductModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="cartProductModalLabel">You are currently looking at...</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-xs-5">
	        		<center>
	        			<img ng-src="./{{cartCtrl.currentProduct.image_url}}" style="width:320px; border:1px solid; border-color:lightgrey" alt="beer!">
	        		</center>
	        	</div>
	        	<div class="col-xs-7">
	        		<!-- tabs -->
	        		<ul class="nav nav-tabs nav-justified">
					  <li ng-class="{ active: cartCtrl.isSelected(1) }">
					  	<a href ng-click="cartCtrl.selectTab(1)">Info</a>
					  </li>
					  <li ng-class="{ active: cartCtrl.isSelected(2) }">
					  	<a href ng-click="cartCtrl.selectTab(2)">Reviews</a>
					  </li>
					</ul>

					<div class="infoPanel" ng-show="cartCtrl.isSelected(1)">
		        		<h2>{{cartCtrl.currentProduct.name}}</h2>
		        		<h4>{{cartCtrl.currentProduct.description }}</h4>
		        		<h4>Rating: {{cartCtrl.currentProduct.rating_cache}} stars</h4>
		        		<hr>
		        		<h3>Price: {{cartCtrl.currentProduct.price | currency }}</h3>
		        		<div class="row">
	  						<div class="col-lg-4">
				        		<div class="input-group">
				        			<span class="input-group-btn">
							        	<button class="btn btn-default" ng-disabled="cartCtrl.currentOrderItem.quantity == 0 || !cartCtrl.editMode" ng-click="cartCtrl.currentOrderItem.quantity = cartCtrl.currentOrderItem.quantity - 1" type="button">-</button>
							      	</span>
							      	<input type="text" class="form-control input" ng-disabled="!cartCtrl.editMode" name="cartProductQuantity" ng-model="cartCtrl.currentOrderItem.quantity">
							      	<span class="input-group-btn">
							        	<button class="btn btn-default" ng-disabled="!cartCtrl.editMode" ng-click="cartCtrl.currentOrderItem.quantity = cartCtrl.currentOrderItem.quantity - 1 + 2" type="button">+</button>
							      	</span>
							    </div>
							</div>
						</div>
					</div>
					<div class="reviewsPanel" ng-show="cartCtrl.isSelected(2)">
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
	      	<a href ng-click="$('#cartProductModal').modal('hide')" class="btn btn-lg btn-danger" role="button">Update Cart</a>
	      </div>
	    </div>
	  </div>
	</div>

