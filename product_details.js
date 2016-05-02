var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.product_details=[{
      "name":"Aallu Bhujia",
      "company":"Haldiram",
      "marketprice":150,
      "seller":"ashesh.nitdgp@gmail.com",
      "deliveryperson":"ashesh.nitd@gmail.com"
    },{
      "name":"Matar Panner",
      "company":"Food Panda",
      "marketprice":250,
      "seller":"ashesh.nitdgp@gmail.com",
      "deliveryperson":"ashesh.nitd@gmail.com"
    },
    {
      "name":"daal makhani",
      "company":"Food Panda",
      "marketprice":225,
      "seller":"ashesh.nitdgp@gmail.com",
      "deliveryperson":"ashesh.nitd@gmail.com"
    }];
    $scope.update_database=function(){
      //console.log(this);
      console.log(this.product);
      $.post('http://localhost/abhi_kart/new_order.php',this.product,function(data){
        console.log(data);
        alert("Thanks for placing the order");
        window.location="http://localhost/abhi_kart/placed_order.php";
;      });
    }
});



app.controller('myCtrl1', function($scope) {

    $scope.init=function(){
      console.log("this is called when page is loaded");
      $.getJSON('http://localhost/abhi_kart/fetch_placed_order.php',function(data){
        console.log(data);
        $scope.placed_order=data;
      });
    }
    $scope.save_data=function(){
      console.log("this is called when button is clicked");
      //console.log(this.order);
      var status = this.ddlvalue;
      console.log(status);
      console.log(this.order);
      this.order.status=status;
      $.post('http://localhost/abhi_kart/update_status.php',this.order,function(data){
        console.log(data);
        window.location="http://localhost/abhi_kart/placed_order.php";
        $scope.placed_order=data;
      });
    }
});


app.controller('myCtrl2', function($scope) {

    $scope.fetch_data=function(){
      console.log("this is called when fetch the data button is clicked");
      $.getJSON('http://localhost/abhi_kart/fetch_request_count.php',function(data){
        //console.log(data);
        var json=[];
        var i=0;
        for(var key in data){
          var obj={};
          obj["count_type"]=key;
          obj["value"]=data[key];
          json.push(obj);
          //console.log(key,data[key]);
        }
        console.log(json);
        plot_donut(json);
      });
    }
});
