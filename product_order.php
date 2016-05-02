<!DOCTYPE html>
<html>
  <head>
    <?php include 'header.php';?>
  </head>
  <body>
    <div class="container" ng-app="myApp" ng-controller="myCtrl">
      <div class="row">
        <div class="col-sm-12" >
          <div class="col-sm-4 login_div"  ng-repeat="product in product_details">
            <div class="panel panel-default">
              <div class="panel-heading">Panel heading without title</div>
              <div class="panel-body">
                <span>Product Name:</span>{{product.name}}<br>
                <span>Product Company:</span>{{product.company}}<br>
                <span>Market Price:</span>{{product.marketprice}}<br>
                <span>Seller:</span>{{product.seller}}<br>
                <span>Delivery Person</span>{{person.deliveryperson}}<br>
                <button name="button" ng-click="update_database()">Submit</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </body>
</html>
