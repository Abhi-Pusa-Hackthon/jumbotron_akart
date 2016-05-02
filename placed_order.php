<!DOCTYPE html>
<html>
  <head>
    <?php include 'header.php';?>
  </head>
  <body>
    <div ng-app="myApp" ng-controller="myCtrl1" data-ng-init="init()" class="container">
      <div class="row">

        <div class="col-sm-12" >
          <div class="panel panel-default" ng-repeat="order in placed_order">
            <div class="panel-body">

              <table>
                <tr>
                  <td>Name</td><td>Company Name</td><td>Status</td><td>Price</td><td>Seller</td><td>Delivery_person</td>
                </tr>
                <tr>
                  <td>
                    {{order.name}}
                  </td>
                  <td>
                    {{order.company}}
                  </td>
                  <td>
                    <select class="status" data-ng-model="ddlvalue" ng-init="ddlvalue=order.status" name="status" >
                      <option>{{order.status}}</option>
                      <option>Originated</option>
                      <option>Packed and Shipped</option>
                      <option>Delivered</option>
                      <option>Confirmed</option>
                    </select>
                    {{ddlvalue}}
                  </td>
                  <td>
                    {{order.marketprice}}
                  </td>
                  <td>
                    {{order.seller}}
                  </td>
                  <td>
                    {{order.deliveryperson}}
                  </td>
                  <td>
                    <button type="button" ng-click="save_data()"class="btn btn-primary" name="button">Save</button>
                  </td>
                </tr>
              </table>

            </div>
          </div>
        </div>
        <button type="button" ng-click="init()" name="button">Click ME</button>
      </div>
    </div>
  </body>
</html>
