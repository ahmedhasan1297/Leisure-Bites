
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans|Pangolin|Boogaloo|Pacifico|Roboto|Crimson+Text">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <script type="text/javascript" src="js/dashboard.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <title>Order food</title>
    <style type="text/css">
        .modal-dialog {
            font-family: 'Crimson Text';
            font-weight: bold;
            font-size: 20px;
            color: #034f84;

        }
        body{
            background-color: #e9e6e0;
            font-family: 'Crimson Text',sans-serif;
            cursor: pointer;
        }
         .first{
             height: 12px;
              border: 0;
             box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
         }
        .modal-header {
            background-color: #d64161;
            color: #fff;
            padding: 16px;
            text-align: center;
            font-size: 20px;
            font-family: 'Crimson Text';
        }

        label {
            color: #a94442;
            font-size: 20px;
            font-family: 'Crimson Text';
        }

        .modal-footer {
            border: none;
        }

        .modal-footer .btn-info {
            padding: 12px 40px;
            background-color: #d64161;
            font-family: 'Crimson Text';
        }

        caption{
            border:1px solid #CA6F1E;
            background-color:#CA6F1E ;
            color: #fff;
            font-family: 'Crimson Text';
        }
        
      .item_order{
        font-family: 'Crimson Text';
        color: #d64161;
      }
       .inside_cart{
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
        background-color: #CA6F1E;
        width: 100%;
        border: 1px solid #CA6F1E;
        color: #fff;
       }
        #username{
          //background:#a94442;
          //padding: 10px;
          font-weight: bolder;
          border-radius: 0px;
          color:#d64161;
          font-family: 'Crimson Text';
          font-size: 30px;
          letter-spacing: 1.5px;
        }

  .cart{
    position: absolute;
    margin-top: 30px;
    border-radius: 50px;
    color: #3A126C;
    width:70px;
    margin-left:-70px;
    text-align:center;
    height: 20px;
    font-family: 'Crimson Text',sans-serif;
    background-color: #fff;
    
  }   
  .cart_item{
    font-family: 'Crimson Text';
    color:#3A126C;
    font-size: 20px;
  } 
  .fa-inr{
    font-size:18px;

  }
   .mainmenu.navbar-default {
  background-color:#ab1a31;
  border-color:transparent;
  
}
.mainmenu .navbar-brand {
  padding: 0px 0px;
}
.navbar-brand  img{
  margin-top: 15px;
  padding-left: 15px;
}
.navbar-nav {
    padding-top: 0;
}

.mainmenu .navbar-nav li a i{
  color:#00c6ff;
  font-size:2rem;
  transition:.3s ease-in-out;
}
.mainmenu .navbar-nav li a:hover{
    color:#69c5ff;
}
.mainmenu .navbar-nav li a{
  text-transform:uppercase;
  font-size: 1.4rem;
  color:#fff;
  font-weight:600;
  letter-spacing:0.1rem;
  font-family: 'Crimson Text', serif;
  cursor: pointer;

}
.mainmenu.menu-bg{
  background:#ab1a31;
  color:#fff;
 //visibility: visible;
 padding-bottom:10px;

}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #555;
    background-color:#c2185b;
    display: inline-block;
    letter-spacing: 2px;
    //margin: 0 0 15px;
    //position: relative;
    font-family: 'Crimson Text', serif;
    text-transform: uppercase;
    //font-weight: 700;
     //padding: 36px 30px;
    background-image: url('img/menu-hover.png');
    background-repeat: no-repeat;
    /* background-size: contain; */
    background-size: 100% 30px !important;
    background-position: center center;
    color:#69c5ff;
    cursor: pointer;
  }
  .tiffins{
  text-align: center;
  padding: 8px;
  margin-bottom: 30px;
  border-right: 5px solid #000;
  background:#ccc;
  //border-radius: 15px;
  //border-top-left-radius: 65px;
  //border-top-right-radius: 50%;
  //border-bottom-right-radius: 66px;
  //border-bottom-left-radius: 50%;
}
.place {
  position: relative;
  //width: 50%;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 98%;
  right: 0;
  top:0;
  background-color:#ab1a31;
  overflow: hidden;
  width: 0;
  height: 72%;
  transition: .8s ease;
  
}

.place:hover .overlay {
  width: 12%;
  left: 0;
  cursor: pointer;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  white-space: nowrap;
}

.pull-left input[type=text] {
    padding: 8px 92px;
    font-size: 17px;
    border: 1px solid grey;
    width: 58%;
    background: #fff;
    margin-left: 170px;
    box-sizing: border-box;
}

.pull-left button {
   padding: 10px;
    background: #e91e63;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

.pull-left::after {
    content: "";
    clear: both;
    display: table;
}
    </style>
    <script type="text/javascript">
        (function () {
            var c = document.cookie;
            var mytest1 = c.split(';');
            // console.log(document.cookie);
            var check = document.cookie;
            var i = mytest1[0].search("=");
            //var j=mytest1[2].search("=");
            i = i + 1;
            //j=j+1;
            //var name=mytest1[2];
            if (mytest1[0].charAt(i) == "x") {
                //alert(c);
                //window.location.assign("dashboard.php");
            }
            else {
                //alert("Cookie Not Set");
                window.location.assign("index1.php");
            }
        }());

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }   

    </script>
    <script type="text/javascript">
        var app = angular.module("myapp", []);

        app.service("modify_item", function ($http) {
            this.modify_item_ = function (v,item,data,para) {
                var total = 0;
                var temp2 = 0, temp = 0;

                for (var j = 0; j < data.length; j++) {
                    temp = data[j].price;
                    temp2 = data[j].quant;
                    total += temp * temp2;
                }
                v.billc = total;
                if(para=="inr")
                {
                    item.quant += 1;
                }
                else if(para=="dec")
                {
                    if(item.quant>1){
                        item.quant -= 1;
                    }
                }
                else if(para=="clear")
                {
                    var idx = v.selected.indexOf(item);
                    v.selected.splice(idx, 1);
                    //alert(para);
                    item.quant = 0;
                }
                else if(para=="emp")
                {
                    v.selected=[];
                    v.billc=0;
                    v.home_menu(v.tiffins);
                }
                
                //console.log(item);
            }
        });
        app.service("count_cat", function ($http) {
            this.count_cat_ = function (v) {
              //alert("in count cat");
              v.selected=[];
              v.billc=0;
                $http.get("count_cat.php")
                    .then(function (response) {
                        v.collected = response.data;
                        //console.log(v.collect);
                        //console.log(v.collect[0].tiffins);
                        //v.grab = chunk(v.collect, 4);
                    });
            }
        });
        app.service("home_menu_", function ($http) {
            this.home_menu__ = function (v, category) {
                //alert(category);
                var request = $http({
                    method: "post",
                    url: "home_menu_.php",
                    headers: { 'content-type': 'application/x-www-form-urlencoded' },
                    transformRequest: function (obj) {
                        // alert(groupid);
                        var str = [];
                        for (var p in obj) {
                            //console.log(p);
                            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                        }
                        //   alert(str.join("&"));
                        return str.join("&");
                    },
                    data: {
                        category:category
                    }
                });
                request.success(
                    function (data) {
                        v.collect = data;
                        if (v.collect=="No Items In This Category[]") {
                          //alert(v.collect);
                          v.menu=false;
                          v.menu1=true;
                          v.menu2=true;
                          v.menu3=false;
                          v.collect="";
                        }
                        else
                        {
                          v.menu=true;
                          v.menu1=false;
                          v.menu2=true;
                          v.menu3=false;
                        }
                        //v.menu=true;
                        //  alert(v.collect);
                        //v.display();
                    }
                );
            }
        });

        app.service("billi", function ($http) {
            this.billing = function (v, data) {
                var total = 0;
                var temp2 = 0, temp = 0;
                for (var j = 0; j < data.length; j++) {
                    temp = data[j].price;
                    temp2 = data[j].quant;
                    total += temp * temp2;
                }
                v.billc = total;
            }
        });

        app.service("append_item", function ($http) {
            this.append_item_ = function (v, item, data) {
                //alert(item.quant);
                var idx = v.selected.indexOf(item);
                if (idx > -1) {
                    v.selected.splice(idx, 1);
                    if (item.quant >= 1) {
                        item.quant = 0;
                    }
                }
                else {
                    //alert("select"); 
                    v.selected.push(item);
                    item.quant = 1;
                }
                var total = 0;
                var temp2 = 0, temp = 0;

                for (var j = 0; j < data.length; j++) {
                    temp = data[j].price;
                    temp2 = data[j].quant;
                    total += temp * temp2;
                }
                v.billc = total;
            }
        });

        app.service("sendorder", function ($http) {
            this.send_order_ = function (v, selected, billc) {
                //alert("send order");
                //console.log(selected);
                var x = Math.floor(Math.random() * 90000) + 10000;
                var select = JSON.stringify(selected);
                //console.log(selected);
                var request = $http({
                    method: "post",
                    url: "send_order.php",
                    headers: { 'content-type': 'application/x-www-form-urlencoded' },
                    transformRequest: function (obj) {
                        // alert(groupid);
                        var str = [];
                        for (var p in obj) {
                            //console.log(p);
                            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                        }
                       // alert(str.join("&"));
                        return str.join("&");
                    },
                    data: {
                        selected: select,
                        bill: v.billc,
                        token: x
                    }
                });
                request.success(
                    function (data) {
                        //alert(data);
                        //v.show();
                        //v.collect=data;
                        v.view();
                    }
                );
            }
        });


        app.service("vieworder", function ($http) {
            this.view_order_ = function (v) {
               // alert("working");
                v.fill = [];
                var request = $http({
                    method: "post",
                    url: "view_order.php",
                    headers: { 'content-type': 'application/x-www-form-urlencoded' },
                    transformRequest: function (obj) {
                        // alert(groupid);
                        var str = [];
                        for (var p in obj) {
                            //console.log(p);
                            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                        }
                        //alert(str.join("&"));
                        return str.join("&");
                    },
                    data: {
                    }
                });
                request.success(
                    function (data) {
                        v.collect = data;
                        //console.log(v.collect);
                        for (var j = 0; j < v.collect.length - 1; ++j) {
                            for (var i = j + 1; i <= v.collect.length - 1; ++i) {
                                if (v.collect[j].token == v.collect[i].token) {
                                }
                                else {
                                    j = i + 1;
                                }
                            }

                        }
                        v.filter(v.collect);
                        v.countcat();
                        //alert(data);
                        //v.show();
                        //v.collect=data;
                    }
                );
            }
        });

        function chunk(arr, size) {
            var newArr = [];
            for (var i = 0; i < arr.length; i += size) {
                newArr.push(arr.slice(i, i + size));
            }
            return newArr;
        }


        app.controller("con1", function ($scope, $http, modify_item, count_cat,home_menu_, billi, append_item, sendorder, vieworder) {
            $scope.selected = [];
            $scope.billc = 0.0;
             $scope.tiffins="tiffins";
             $scope.north_indian="north_indian";
             $scope.south_indian="south_indian";
             $scope.juices="juices";
             $scope.ice_creams="ice_creams";
             $scope.bakery="bakery";
             $scope.chat="chat";
             $scope.pizza="pizza";
             $scope.chinese="chinese";
              $scope.menu=true;
              $scope.menu1=true;
              $scope.menu2=false;
              $scope.menu3=true;
              $scope.inr="inr";
              $scope.dec="dec";
              $scope.clear="clear";
              $scope.emp="emp";
            $scope.modify = function (item,selected,para) {
                modify_item.modify_item_($scope,item,selected,para);  
            }              

            $scope.countcat = function () {
                count_cat.count_cat_($scope);         
            }
              $scope.home_menu = function (category) {
               // alert(category);
                    home_menu_.home_menu__($scope, category);
              }
            $scope.exit = function (item) {
                item = 1;
                return $scope.selected.indexOf(item) > -1;
            }

            $scope.bill = function (data) {
                billi.billing($scope, data);

            }

            $scope.appenditem = function (item, selected) {
                append_item.append_item_($scope, item, selected);
            }
            $scope.send_order = function (selected, billc) {
                sendorder.send_order_($scope, selected, billc);
            }
            $scope.view = function () {
                vieworder.view_order_($scope);
            }
            $scope.filter = function (got) {
                prev = 0;
                angular.forEach(got, function (value) {
                    // console.log(got);
                    if (prev != value.token) {
                        $scope.fill.push({ token: value.token, uname: value.uname, name: value.name, bill: value.bill  });
                        //console.log(value.name);
                    }
                    prev = value.token;
                });
                 //console.log(($scope.fill));
                 //$scope.countcat();
                //v.billc=0;
                //v.selected=[];
            }
        });
    </script>

</head>

<body ng-app="myapp" ng-controller="con1" ng-init="countcat()" style="font-family: 'Crimson Text', serif">
    <header id="header">
        <div class="container">
          <nav class="mainmenu navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                   <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav pull-left" >
                    <li><img src="img/logo.png" width="50" height="40" class="img-circle"></li>
                    <li><a href="#" style="font-size: 20px;font-family: 'Crimson Text'">LEISURE BITE</a></li>
                    <li class="search"><input type="text" placeholder="Search.." ng-model="test" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button></li>
                        
                  </ul>
                    <ul class="nav navbar-nav pull-right">
                          <li><img src="img/buy.png" onclick="openNav4()" class="img-rounded" width="40" height="40" style="margin-left:-60px;position:absolute;margin-top: 6px;cursor: pointer">
                          <div class="cart">
                        <span style="font-weight: bold;color: #3A126C;font-family: 'Crimson Text'"><i class="fa fa-inr" aria-hidden="true">{{billc}}.0</i></span>
                        </div></li>  
                        <li><a onclick="delcookie()"><span  id="signup" style="background-color: #ffffff !important; color: #32496F; -webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7); -moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7); box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7); text-decoration: none; padding: 10px;margin-left: 10px">LOGOUT</span></a></li> 
                        <li>
                    </ul>
                </div><!-- /.navbar-collapse -->
        </div>
            </div><!-- /.container-fluid -->
        </nav>
    <div id="mySidenav4" class="sidenavd">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 confirm">
                <div class="inside_cart">
                     <h3 style="font-family: 'Crimson Text'"> CART</h3>
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">>></a>
                 </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quant</th>
                                 <th>Price</th>
                                 <th>Cancel Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="x in selected" class="cart_item">
                                <td> {{x.name}}</td>
                                <td>
                                    <i class="fa fa-minus" aria-hidden="true" ng-click="modify(x,selected,dec)"></i>
                                    {{x.quant}}
                                    <i class="fa fa-plus" aria-hidden="true" ng-click="modify(x,selected,inr)"></i>
                                </td>
                                <td> 
                                    <i class="fa fa-inr" aria-hidden="true">{{x.price * x.quant}}</i>
                                </td>
                                <td><i class="fa fa-times" aria-hidden="true" ng-click="modify(x,selected,clear)"></i></td>
                            </tr>
                        </tbody>
                    </table><hr>
                    <h4 style="text-align: right;font-family: 'Crimson Text';color: #4527A0">Sub Total :<i class="fa fa-inr" aria-hidden="true">{{billc}}</h4></i>
                    <p ng-click="menu3=true;menu2=false;menu1=true" onclick="closeNav4()"><button type="button" class="contacts-btn" ng-click="send_order(selected,billc)" data-toggle="modal" data-target="#myModal_order">Proceed to checkout</button></p>
               

            </div>
        </div>
        </div>
 
    <hr class="first">
  <section id="menu-list"  style="background:#e9e6e0" ng-hide="menu2">
    <div class="container">
          <div class="col-md-12 text-center marb-35" >
            <h1 class="main-title" style="font-family: 'Crimson Text';font-size: 30px" >Menu</h1>
          </div>
      <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place  animated flipInX">
            <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>TIFFIN'S </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(tiffins)">{{collected[0].tiffins}} Items</div>
           </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 place animated animated flipInX du-1" >
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>SOUTH INDIAN </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(south_indian)">{{collected[1].south_indian}} Items</div>
           </div>
        </div>    

    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place animated flipInX du-2" >
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>NORTH INDIAN</h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(north_indian)">{{collected[2].north_indian}} Items</div>
           </div>
        </div>   
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place animated flipInX du-3" >
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>JUICES </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(juices)"> {{collected[3].juices}} Items</div>
           </div>
        </div>         
    </div>
      <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place animated flipInX du-4" >
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2 >ICE CREAMS</h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(ice_creams)"> {{collected[4].ice_creams}} Items</div>
           </div>
        </div>   
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place animated flipInX du-5">
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>BAKERY </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(bakery)"> {{collected[6].bakery}} Items</div>
           </div>
        </div>     
    </div>
    <div class="row" >
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place  animated flipInX du-6">
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>CHAT </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(chat)"> {{collected[5].chat}} Items</div>
           </div>
        </div>   
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place animated flipInX du-7">
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>PIZZA & SANDWICH </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(pizza)">{{collected[7].pizza}} Items</div>
           </div>
        </div>     
    </div>
        <div class="row" >
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 place animated flipInX du-8">
           <div class="tiffins " ng-click="home_menu(tiffins)">
                <h2>CHINESE </h2>
           </div>
           <div class="overlay">
             <div class="text" ng-click="home_menu(chinese)"> {{collected[8].chinese}} Items</div>
           </div>
        </div>        
    </div>
</div>
  </section>
 <section id="menu-list1" ng-hide="menu3" class="" style="background:#e9e6e0">
    <div class="container-fluid">
      <div class="row" >
        <div class="col-md-12 text-center marb-35" >
          <h1 class="main-title" style="font-family: 'Crimson Text';font-size: 30px" >Menu</h1>
          </div>
            <br>
            <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a ng-name="tiffins" ng-click="home_menu(tiffins)">TIFFIN'S</a></li>
            <li><a ng-name="north_indian" ng-click="home_menu(south_indian)">SOUTH INDIAN</a></li>
            <li><a ng-name="south_indian" ng-click="home_menu(north_indian)">NORTH INDIAN</a></li>
            <li><a ng-name="juices" ng-click="home_menu(juices)">JUICES</a></li>
            <li><a ng-name="ice_creams" ng-click="home_menu(ice_creams)">ICE CREAMS</a></li>
            <li><a ng-name="bakery" ng-click="home_menu(bakery)">BAKERY</a></li>
            <li><a ng-name="chat" ng-click="home_menu(chat)">CHAT</a></li>

            <li><a ng-name="pizza" ng-click="home_menu(pizza)">PIZZA & SANDWICH</a></li>
            <li><a ng-name="chinese" ng-click="home_menu(chinese)">CHINESE</a></li>
          </ul>
        </div>
      </div>
  </div>
      <div class="container" style="width: 70%;height:400px;
    //border: 1px dotted black;
    overflow-x: hidden;
    overflow-y: scroll">
      <div class="row" >
        <div class="slideanim"  ng-hide="menu1" ng-repeat="x in collect|filter:test">
          <div class="breakfast menu-restaurant" ng-mouseover="hoverEdit = true" ng-mouseleave="hoverEdit = false" ng-click="appenditem(x,selected)">
              <!--<span class="clearfix" >-->
              <a class="menu-title" href="#" >{{x.name}}</a>
              <span ng-show="hoverEdit"><a>add to cart</a></span>
              <img src="{{x.photo}}"  class="img-thumbnail" width="80" height="60" style="margin-left:10px">
              <span style="left: 256px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><i class="fa fa-inr" aria-hidden="true">{{x.price}}</i></span>
          </div>
      </div>
    </div>
      <div ng-hide="menu">
        <h2>No Items In This Category</h2>
      </div>
</div>    
  </section>

  <div class="modal fade" id="myModal_order" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" ng-click="menu3=true;menu2=false;menu1=true">&times;</button>
          <img  src="img/right.png" class="img-circle right animated flipInX" height="150" width="150">
          <h1 class="process_order" align="center">We are Processing Your Order</h1>
        </div>
            <div ng-repeat="y in fill">
                <table class="table ">
                    <caption><b>Name</b>:{{y.name}} &nbsp;&nbsp;&nbsp;&nbsp; <b>Token no</b>:{{y.token}} &nbsp;&nbsp;&nbsp; &nbsp;<b>Sub Total</b>:<i class="fa fa-inr" aria-hidden="true">{{y.bill}}</i></caption >
                        <thead>
                            <tr class="item_order">
                                <th>item</th>
                                <th>price</th>
                                <th>Quant</th>
                                <th>Bill</th>
                            </tr>
                        </thead>
                        <tbody style="font-family: 'Crimson Text'">
                            <tr ng-repeat="x in collect | filter:y.token">
                                <td> {{x.item}}</td>
                                <td> <i class="fa fa-inr" aria-hidden="true"> {{x.price}}</i></td>
                                <td> 
                                    {{x.quant}}
                                </td>
                                <td>
                                    <i class="fa fa-inr" aria-hidden="true">{{(x.price)*(x.quant)}}</i>
                                </td>

                            </tr>
                        </tbody>
                </table>
                <hr>

            <!--<button type="button" ng-click="send_order(selected,billc)">confirm order</button>-->
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" ng-click="menu3=true;menu2=false;menu1=true">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top" class="animated fadeInRightBig"><i class="fa fa-chevron-up" aria-hidden="true"></i>
    <!--banner-->
    <!-- / footer -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js">
              $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip(); 
      });
    </script>

</body>

</html>