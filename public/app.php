<div>
      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href ng-click="panelCtrl.selectTab(1)"><b>Passion Crafters</b></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li ng-class="{ active: panelCtrl.isSelected(1) }">
                <a href ng-click="panelCtrl.selectTab(1)">Home</a>
              </li>
              <li ng-class="{ active: panelCtrl.isSelected(2) }">
                <a href ng-click="panelCtrl.selectTab(2)">Store</a>
              </li>
              <li ng-class="{ active: panelCtrl.isSelected(3) }">
                <a href ng-click="panelCtrl.selectTab(3)">Contact+</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li id="cartNavBtn" ng-class="{ active: panelCtrl.isSelected(4) }">
                <a href ng-click="panelCtrl.selectTab(4)">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Cart <span id="cartBadge" class="badge">0</span>
                </a>
              </li>
              <p class="navbar-text navbar-right">Welcome, <a href="#" class="navbar-link">John Doe</a></p>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div>
          <div class="homePanel" ng-show="panelCtrl.isSelected(1)">
            <div class="row">
              <div class="col-lg-6">
                <img src="./images/site/logo.png" style="width:100%"/>
              </div>
              <div class="col-lg-6">
                <b class="bs-docs-header pull-right" style="font-size: 900%">Taste.</b>
                <b class="bs-docs-header pull-right text-muted" style="font-size: 500%">with your mind.</b>
              </div>
            </div>
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider-inverse">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">Take a sip. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Simply put, craft beer is beer not brewed by one of the big "mega-brewery" corporations. More often than not, when the phrase craft beer is used, this is what it means.</p>
                <p class="lead"><i>Beer is meant to be enjoyed, not chugged.</i></p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-responsive" src="./images/site/landing_1.jpg" style="border:1px solid; border-color:lightgrey" alt="500x500" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=">
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-5">
                <img class="featurette-image img-responsive" src="./images/site/landing_2.jpg" style="border:1px solid; border-color:lightgrey" alt="500x500" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=">
              </div>
              <div class="col-md-7">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">If you prefer to swerve the supermarkets and buy more interesting and original beers from fellow hop-heads, then there has never been a better time to be alive.</p>
                <p class="lead"><i>Stronger, full-flavored craft beers with 5-8% abv there is no need to drink beer after beer after beer.</i></p>
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">Small. Independent. Traditional. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Craft brewers put their heart and soul, as well as, lots of amazing ingredients into every beer they brew and don’t cut any corners.  The big beer companies, on the other hand, are on a mission to take ingredients out of their beer in order to make their beer as “watery” as possible. </p>
                <p class="lead"><i>Why would anyone want to drink beer that is purposely being watered down by leaving out important ingredients?</i></p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-responsive" src="./images/site/landing_3.jpg" style="border:1px solid; border-color:lightgrey" alt="500x500" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=">
              </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

          </div>
          <div class="storePanel" ng-show="panelCtrl.isSelected(2)">
            <product-panel></product-panel>
          </div>
          <div class="contactPanel" ng-show="panelCtrl.isSelected(3)">
            <contact-panel></contact-panel>
          </div>
          <div class="cartPanel" ng-show="panelCtrl.isSelected(4)">
            <cart-products></cart-products>
          </div>
        </div>

        <!-- FOOTER -->
        <footer>
          <p>© 2014 Passion Crafters, Inc. · <a href>Privacy</a> · <a href>Terms</a></p>
        </footer>
      </div> <!-- /container -->
    </div>