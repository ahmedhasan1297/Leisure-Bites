<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Panel</title>
  <script type="text/javascript">
     (function(){
        var c=document.cookie;
        var mytest1=c.split(';');
      // console.log(document.cookie);
        var check=document.cookie;
        var i=mytest1[0].search("=");
        i=i+1;
        if(mytest1[0].charAt(i)=="y")
        {
            //alert(i+" "+j);
            //window.location.assign("admin");
        }
        else
        {
           window.location.assign("index.php");
        }
 }());
  </script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans|Pangolin|Boogaloo|Pacifico|Concert+One|Crimson Text">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <script type="text/javascript" src="js/angular.js"></script>
  <script>
    var app = angular.module("myapp", []);
    app.service("delete_order",function($http){
      this.delete_order_=function(v,name,token){
        //alert("hai");
         var request = $http({ 
                     method: "post", 
                     url: "delete_order.php", 
                     headers:{'content-type':'application/x-www-form-urlencoded'}, 
                     transformRequest: function(obj) {
                               // alert(groupid);
                                                  var str = [];
                                                  for(var p in obj)
                                                  {
                                                        //console.log(p);
                                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                                  }                                                      
                                               //   alert(str.join("&"));
                                                    return str.join("&");
                                            },
                     data: { 
                         name:name,
                         token:token
                     } 
                 }); 
                 request.success(
                     function( data ) {
                         v.show(); 
                         v.collect=data;
                     } 
                 ); 
            }
       });

    app.service("showmenu", function ($http) {
      this.show_menu = function (v) {
        v.collect = "";
        v.fill = [];
        $http.get("view_pending.php")
          .then(function (response) {
            if(typeof(response.data)=="string")
            {
              var w=response.data.split(' ');
              if(w[0] == "0")
            {
              console.log('hai'+document.getElementById('pending_orders'));
              document.getElementById('pending_orders').innerHTML="<h1>NO Pending Orders</h1>";
            }
            }
            //console.log(w);
            
            else
            {
                v.collect = response.data;
                for (var j = 0; j < v.collect.length - 1; ++j) {
                  for (var i = j + 1; i <= v.collect.length - 1; ++i) {
                    if (v.collect[j].token == v.collect[i].token) {
                    }
                    else {
                      j = i + 1;
                    }
                  }
                 
                  console.log(v.collect);
                } 
                 v.filter(v.collect);
            }
          });

      }
    });
    app.controller("con1", function ($scope, $http,delete_order, showmenu) {
      $scope.collect = "";
      $scope.show = function () {
        //alert("hi in show");
        showmenu.show_menu($scope);
      }

      $scope.deleteorder=function(username,token){
        delete_order.delete_order_($scope,username,token);
      }

      $scope.filter = function (got) {
        prev = 0;
        angular.forEach(got, function (value) {
          // console.log(got);
          if (prev != value.token) {
            $scope.fill.push({ token: value.token, uname: value.uname, phoneno:value.phoneno, name: value.name, bill: value.bill });
          }
          prev = value.token;
        });
        // console.log($scope.fill);
      }
    });

    //deleting cookie function for admin
    function delcookie1()
         {
          var c=document.cookie;
          var mytest1=c.split(';');
        //alert("before closing:"+mytest1[0]+" "+mytest1[1]);
          var v1=mytest1[0].substr(0,mytest1[0].search("="));
          var v2=mytest1[1].substr(0,mytest1[1].search("="));
          //alert(v1+"  "+v2);
          document.cookie = mytest1[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
          document.cookie = mytest1[1]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        //alert("close");
          window.location.assign("logout.php?p1="+v1+"&p2="+v2);   
}
   
  </script>
  <style type="text/css">
  	  	table{
  		font-family: 'Crimson Text', sans-serif;
  		font-weight: normal;
  
  	}
    body{
      background: #FBFCFC;
      font-family: 'Crimson Text';
    }
  	
  	th{
  		background-color:#A52A2A;
      color: #fff;
      font-family: 'Crimson Text';
      font-size: 20px;
  	}
    td{
      color: #000;
      font-family: 'Crimson Text';
    }
    tr{
      font-size: 20px;
    }
  	.navbuttons{
  		padding-left: 5%;
  	}
    .tot_bill{
      color: #000;
      font-weight: bolder;
      text-transform: capitalize;
      font-size:16px;
      letter-spacing: 1.5px;
      margin-left:43%;
      letter-spacing: 2px;
      padding: 20px;
      font-family: 'Crimson Text';
     }
     .cust_name,.token_no{
      color: #000;
      text-transform: capitalize;
      font-family: 'Crimson Text',sans-serif;
      cursor: pointer;
      font-size: 18px;
     }
     .token_no{
       margin-left:2%;
       font-family: 'Crimson Text';
       font-size: 20px;

     }
     .cust_name{
     font-family: 'Crimson Text';
     font-size: 20px;
     letter-spacing: 2px;
     margin-left:1%;
     }
      .fa-trash{
       color:#A52A2A;
       font-size: 20px;
       cursor: pointer;
       padding: 2px;
     
     }
     .fa-clock-o{
      margin-left: 2%;
      color: #A52A2A;
     }
     .first{
             height: 12px;
              border: 0;
             box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
         }
         .admin_add:hover{
          background-color: #fff;
          color: #337ab7;
         }
         .navbar {
    -webkit-box-shadow: 0 8px 6px -6px #A1887F   ;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #A1887F   ;
    max-height:200px; 
    //background-color:#ffc107;
}
.po{
  font-family: 'Crimson Text';
  font-size:30px;
  margin-left: 450px;
  color:#A52A2A;
  font-weight: bolder;
}
.orders{
  border:1px solid #fff ;
  background-color:#fff;
  border-radius: 2px;  
}
img{
  margin-bottom: -2%;
}
.fa-inr{
  font-size: 15px;
}

  </style>

</head>
<body ng-app="myapp" ng-controller="con1" ng-init="show()">
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="img/logo.png" class="img-circle" width="80px" height="80px">
      <!--<span class="ap" style="border:2px solid orange;padding: 10px">ADMIN PANEL</span>-->
      <!--<i class="fa fa-trash" aria-hidden="true" ng-click="deleteorder(y.uname,y.token)"></i>-->
        <span class="po"> PENDING ORDERS</span>
            </div>
              <a class="admin_add" href="menu.html"><img src="img/dmenu.png" class="img-rounded" width="40" height="40" data-toggle="tooltip" data-placement="right" title="view menu" style="margin-left: 60px"></a>
          <a href="#" class="add_item" onclick="delcookie1()" >
          <img src="img/dlog.png" data-toggle="tooltip" data-placement="right" title="logout"  width="40" height="40"></a>
</nav>
<hr class="first">
   <div class="container" style="margin-top:50px;padding: 20px;background-color: #fafafa" id="pending_orders">
    <div class="row ">
    <div class="col-xs-12 col-sm-12 col-md-12 ">
    <div ng-repeat="y in fill">
      <table class="table orders">
        <div>
        <span class="cust_name" data-toggle="tooltip" data-placement="right" title="customer name" ><b><i class="fa fa-address-book-o" aria-hidden="true"></i>
         </b>:{{y.name}}</span>
        <span class="cust_name" data-toggle="tooltip" data-placement="right" title="customer phone number" ><b><i class="fa fa-phone" aria-hidden="true"></i>
         </b>:{{y.phoneno}}</span>
        <span class="token_no" data-toggle="tooltip" data-placement="right" title="token no" > <b><i class="fa fa-ticket" aria-hidden="true"></i>
          </b> :{{y.token}} </span>
        <!--<i class="fa fa-clock-o" aria-hidden="true">{{y.time}}</i>-->
        <span class="tot_bill">total bill:{{y.bill}}<i class="fa fa-inr" aria-hidden="true"></i></span>

       <img src="img/delete.png" data-toggle="tooltip" data-placement="left" title="clear order" width="30" height="25" style="margin-top: -2%" ng-click="deleteorder(y.uname,y.token)">
          
        </i>
        <thead style="border-radius: 20px">
          <tr>
            <th class="col-sm-6">item</th>
            <th class="col-sm-2">price</th>
            <th class="col-sm-2">Quant</th>
            <th class="col-sm-2">Bill</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="x in collect | filter:y.token">
            <td> {{x.item}}</td>
            <td> <i class="fa fa-inr" aria-hidden="true">{{x.price}}</i></td>
            <td> {{x.quant}}</td>
            <td><i class="fa fa-inr" aria-hidden="true">{{(x.quant)*(x.price)}}</i></td>

          </tr>
          
        </tbody>
      </table>
      <hr>
      <!--<button type="button" ng-click="send_order(selected,billc)">confirm order</button>-->
    </div>
    </div>
    </div>
  </div>
</div>
  <!--banner-->
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip(); 
      });
  </script>
</body>
</html>
