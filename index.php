<!DOCTYPE html>
<html lang="en">
<head>
   <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
  <?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LEISURE BITE</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans|Pangolin|Boogaloo|Pacifico|Concert+One|Crimson Text">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>

    <script type="text/javascript" src="js/angular.js"></script>
  <script type="text/javascript">
     (function(){
        var c=document.cookie;
        var mytest1=c.split(';');
      // console.log(document.cookie);
        var check=document.cookie;
        var i=mytest1[0].search("=");
        i=i+1;
        if(mytest1[0].charAt(i)=="x")
        {
            //alert(i+" "+j);
            window.location.assign("dashboard.php");
        }
        else if(mytest1[0].charAt(i)=="y")
        {
            //alert(i+" "+j);
            window.location.assign("admin.php");
        }
        else
        {
           //window.location.assign("index.php");
        }
 }());
     //angular code starts from here
      //  "use strict"
    var app=angular.module("validation",[]);
        app.service("home_menu_", function ($http) {
            this.home_menu__ = function (v, category) {
              alert(category);
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

    app.controller("con1",function($scope,home_menu_){
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
      $scope.signup=false;
      $scope.home_menu = function (category) {
               // alert(category);
                home_menu_.home_menu__($scope, category);
            }

    });

                  //Function for checking the confirm password
            app.directive("checkme",function(){
               return{
            require:'^form',
            restrict:'A',                         
            link:function(scope,element,attrs,forminfo)
            {
                      //scope.dim=true;
                      //console.log(forminfo);
                      var button_dim_counter=0;
                      scope.$watch('repassword',function(newval,oldval){
                      button_dim_counter=button_dim_counter+1;
                      if(scope.repassword==null)
                      {
                         forminfo.$invalid=true;  
                         element.text("confirm password properly"); 
                         
                      } 
                    else if(scope.password!=scope.repassword)
                      {
                            forminfo.$invalid=true;  
                                  element.text("confirm password properly");
                    }   
                      else if(button_dim_counter>1)
                      {
                                      forminfo.$invalid=false;  
                                      element.text("");
                                      
                      }          
                },true)
                scope.$watch('password',function(newval,oldval){
                    if(scope.password==null)
                      {
                         forminfo.$invalid=true;  
                         element.text("confirm password properly"); 
                      } 
                      else if(scope.password!=scope.repassword)
                      {
                                  forminfo.$invalid=true;  
                                  element.text("confirm password properly");
                       }   
                              
                },true)             //console.log(scope.repassword);                  
                       
            }
          }
          })

   </script>
   <style type="text/css">
     .mainmenu.navbar-default {
  background-color:transparent;
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
  background:#a91e35;
  color:#fff;
 //visibility: visible;
 padding-bottom:10px;

}
.about-info .heading{
  background-color:#a91e35!important;
    color: #ffffff !important;
    padding: 11px;
    width: 100%;
    font-size: 15px;
    text-transform: capitalize;
    border: 0px;
    color: #fff !important;
    font-family: 'sans-serif';
    letter-spacing:1.5px;
    cursor: pointer;
    text-align: center;

  
  }

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #555;
    background-color: #ab1a31;
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
  background: #ccc;
}
</style> 
</head>
<body  ng-app="validation" ng-controller="con1" >
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
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
                  <ul class="nav navbar-nav pull-left" style="display: none;font-size: 30px">
                    <li><a href="#" >LEISURE BITE</a></li>
                  </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li ><a href="#about" id="about1">About</a></li>
                        <li ><a href="#menu-list" id="menu-list1">Menu</a></li>
                        <li><a href="#contact" id="contact1">Contact</a></li>
                         <li onclick="openNav()"> <a>LOGIN</a></li>
                        <li  id="signup" ng-hide="signup"><a onclick="openNav1()" ><span  style="background-color: #ffffff !important; color: #32496F; -webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7); -moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7); box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7); text-decoration: none; padding: 10px;">SIGN UP</span></a></li> 
                        <li>
                    </ul>
                </div><!-- /.navbar-collapse -->
        </div>
            </div><!-- /.container-fluid -->
        </nav>

          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()" ng-click="signup=false">&times;</a>       
            <h2 class="lh" style="font-family: 'Crimson Text';font-size: 25px">LOGIN HERE</h2><br>
                      <form class="form-horizontal" name="uform" method="post" action="concheck.php" autocomplete="off"novalidate>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control label-floating is-empty" name="lemail" ng-model="lemail" ng-pattern="/[A-Za-z.-]\w+@gmail\.com$/" ng-required="true"   placeholder="Enter Email" />
                            <span class="err_msg" style="color: red;font-size: 13px"  ng-show="uform.lemail.$error.pattern">Enter valid Email</span>
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="password" class="form-control" name="lpassword" placeholder="Enter password" ng-model="lpassword" ng-pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[*&_!@.]).{8,}$/" maxlength="20" ng-required="true" ng-minlength="8">
                            <!--<span  class="err_msg" style="color: red;font-size: 15px" ng-show="uform.lpassword.$error.pattern"> Not a strong password</span>
                            <span  class="err_msg" style="color: red;font-size: 15px" ng-show="uform.lpassword.$error.minlength">Password is too short</span>-->
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class=" col-sm-12">
                            <button type="submit" class="contacts-btn" ng-disabled="uform.$invalid">Login</button>
                            <p><a href="forgotpassword.html" style="font-family: Crimson Text">forgot password??</a></p>
                            <h4 ><a href="#" onclick="openNav2()" ng-click="signup=true">ADMIN LOGIN</a></h4>
                          </div>
                        </div>
                    </form>
          </div>
           <div id="mySidenav1" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h2 class="lh" style="font-family:'Crimson Text';font-size: 25px;color:#3C4B6B">CREATE ACCOUNT</h2><br>
                      <form class="form-horizontal" name="regform" method="post" action="register.php" autocomplete="off" novalidate>
                      <div class="form-group">
                          <div class="col-sm-12"> 
                            <input type="text" class="form-control" name="name" ng-model="name" ng-required="true" ng-pattern="/^[a-zA-Z]+([a-zA-Z ]+)$/" placeholder="Enter name">
                            <span  class="err_msg" style="color: red;font-size: 15px" ng-show="regform.name.$error.pattern">Enter a valid name</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control label-floating is-empty" name="email" ng-required="true" ng-model="email" ng-pattern="/[A-Za-z.-]\w+@gmail\.com$/"   placeholder="Enter Email" />
                            <span class="err_msg" style="color: red;font-size: 15px" ng-show="regform.email.$error.pattern" >Enter valid Email</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12"> 
                            <input type="text" class="form-control"  name="phno"  placeholder="Enter phone number" ng-model="phnno" ng-required="true" ng-minlength="10" maxlength="10" ng-pattern="/^[0-9]{10}$/" >
                            <span  class="err_msg" style="color: red;font-size:  15px"  ng-show="regform.phno.$error.pattern">Enter a valid phone number</span>
                            <span class="err_msg" style="color: red;font-size:15px" ng-show="regform.phno.$error.minlength">Enter 10 digits only</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12"> 
                            <input type="password" class="form-control" name="pwd" ng-pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[*&_!@.]).{8,}$/" maxlength="20" ng-required="true" ng-minlength="8" ng-model="password" placeholder="Enter password">
                            <span class="err_msg" style="color: red;font-size:  15px" ng-show="regform.pwd.$error.pattern"> Password contain atleat 1 capital,numeric,special char</span>
                            <span class="err_msg" style="color: red;font-size:  15px" ng-show="regform.pwd.$error.minlength">Password is too short</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12 col-xs-1ss2"> 
                            <input type="password" class="form-control" name="confirm" ng-required="true" placeholder="Confirm password" ng-model="repassword">
                            <span class="err_msg" style="color: red;font-size:  15px"  checkme ng-show="regform.confirm.$dirty"></span>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-12 col-xs-12">
                            <button type="submit" class="contacts-btn submit1" ng-disabled="regform.$invalid">CREATE</button>
                          </div>
                        </div>
                      </form>
          </div>
           <div id="mySidenav2" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" ng-click="signup=false" onclick="closeNav2()">&times;</a>       
            <h2 class="lh" style="font-family: 'Crimson Text',sans-serif;font-size:25px;color: #32496f">ADMIN LOGIN</h2><br>

                      <form class="form-horizontal" name="adminform" action="admincheck.php" method="post" autocomplete="off" novalidate>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control " name="aemail"  placeholder="Enter Email" ng-required="true" ng-pattern="/[A-Za-z.-]\w+@gmail\.com$/" ng-model="email" />
                            <span class="err_msg" style="color: red;font-size: 15px"  ng-show="adminform.aemail.$error.pattern">Enter valid Email</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="password" name="apassword" class="form-control"  placeholder="Enter password" ng-model="apassword" ng-pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[*&_!@.]).{8,}$/" maxlength="20" ng-required="true" ng-minlength="8">
                            <span class="err_msg" style="color: red;font-size: 15px" ng-show="adminform.apassword.$error.pattern"> Not a strong password</span>
                            <span class="err_msg" style="color: red;font-size: 15px" ng-show="adminform.apassword.$error.minlength">Password is too short</span> 
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-12">
                             <button  class="contacts-btn" type="submit" ng-disabled="adminform.$invalid">CONTINUE</button>
                          </div>
                        </div>
                    </form>
          </div>
          <!-- Use any element to open the sidenav -->
         

          <!--<div id="mySidenav5" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>
            <img src="img/about.png" width="40" style="margin-top:2%;margin-left: 25%;position: absolute ">
            <a href="#about" onclick="closeabt()">About</a>
            <img src="img/rmenu.png" width="40" style="margin-top:3%;margin-left: 25%;position: absolute ">
            <span><a href="#menu-list">Menu</a></span>
            <hr>
            <span onclick="openNav()" class="tecface-offcanvas pull-right login">login</span>
           <span onclick="openNav1()" class="tecface-offcanvas pull-right  signup">Sign Up</span>
          </div>-->
           
          </div>
      </header>
      <div class="container">
        <div class="row">
           <img src="img/logo.png" class=" img-circle logo animated flipInY" height="130px" width="130px">
          <div class="inner text-center">
           <!-- <img class="img-circle" src="img\logo.png" width="250px" height="600px">-->
           <h2 class="logo-name animated fadeInDownBig du-1 text-center" style="color: #fff;font-family: 'Crimson Text';"><b>WELCOME TO LEISURE BITE</b></h2>
            <img src="img/line.png" class="du-3 animated zoomIn" height="15" width="270">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="section-padding" style="background: #e9e6e0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="main-title" style="font-family: 'Crimson Text';font-size: 30px">About</h2>   
          </div>
        <div class="col-md-12">
          <div class="col-md-6 col-sm-6" style="">
            <div class="about-info slideanim">
              <h2 class="heading" style="font-family: 'Crimson Text';background: #a91e35">LEISURE BITE</h2>
              <p style="font-family: 'Crimson Text';font-size: 20px;margin-bottom: 30px;">LEISURE BITE is our canteen services which is duly registered under the REGISTRATION OF BUSINESS NAMES ACT, 1962(151) BY THE REGISTRAR GENERAL’S DEPARTMENT for which Certificate of Commencement of Business issued, has gained reputation under few years of operation by supplying well-prepared, nutritious, quality and health meals at competitive prices to companies which require Catering and Cafeteria services for their employees.We strive to meet all our customer demands to ensure our mutual benefits and growth. We believe that quality food is a necessity of life and aids in human development which can improve workers’ output andproductivity.</p>
              <a href="Leisure Bite Profile.pdf" class="btn btn-primary" target="_blank">Read more...</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 box">
            <img src="img/frankie88.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  
  <section id="menu-list" class="section-padding" ng-hide="menu2" style="background: #F0F3F4">
    <div class="container">
          <div class="col-md-12 text-center marb-35" >
            <h1 class="main-title" style="font-family: 'sans-serif';font-size: 30px" >Menu</h1>
          </div>
      <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 slideanim">
           <div class="tiffins" ng-click="home_menu(tiffins)">
             <h2 ng-click="home_menu(tiffins)">TIFFIN'S</h2>
           </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box" >
           <div class="tiffins" ng-click="home_menu(south_indian)">
             <h2 ng-click="home_menu(south_indian)">SOUTH INDIAN</h2>
           </div>
        </div>    
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 slideanim">
           <div class="tiffins" ng-click="home_menu(north_indian)">
             <h2 ng-click="home_menu(north_indian)">NORTH INDIAN</h2>
           </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box">
           <div class="tiffins" ng-click="home_menu(juices)">
             <h2 ng-click="home_menu(juices)">JUICES</h2>
           </div>
        </div>        
    </div>
      <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 slideanim">
           <div class="tiffins" ng-click="home_menu(ice_creams)">
             <h2 ng-click="home_menu(ice_creams)">ICE CREAMS</h2>
           </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box">
           <div class="tiffins" ng-click="home_menu(bakery)">
             <h2 ng-click="home_menu(bakery)">BAKERY</h2>
           </div>
        </div>    
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 slideanim">
           <div class="tiffins" ng-click="home_menu(chat)">
             <h2 ng-click="home_menu(chat)">CHAT</h2>
           </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box">
           <div class="tiffins" ng-click="home_menu(pizza)">
             <h2 ng-click="home_menu(pizza)">PIZZA & SANDWICH</h2>
           </div> 
        </div>        
    </div>
        <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 slideanim">
           <div class="tiffins" ng-click="home_menu(chinese)">
             <h2 ng-click="home_menu(chinese)">CHINESE</h2>
           </div>
        </div>        
    </div>
</div>
  </section>

 <section id="menu-list1" ng-hide="menu3" class="section-padding" style="background: #F0F3F4">
    <div class="container-fluid">
      <div class="row" >
        <div class="col-md-12 text-center marb-35" >
          <h1 class="main-title" style="font-family: 'sans-serif';font-size: 30px" >Menu</h1>
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
          <div ng-hide="menu">
        <h3>No Items In This Category</h3>
      </div>
    <div class="container" style="height:400px;overflow-x: hidden;overflow-y: scroll">
        <div   ng-hide="menu1" ng-repeat="x in collect">
          <div class="breakfast menu-restaurant">
              <!--<span class="clearfix" >-->
              <a class="menu-title" href="#">{{x.name}}</a>
              <img src="{{x.photo}}"  class="img-thumbnail" width="80" height="60" style="margin-left:10px">
              <span style="left: 256px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><i class="fa fa-inr" aria-hidden="true">{{x.price}}</i></span>
          </div>
      </div>
    </div>
    </div>    
  </section>
 <!-- <section id="himalayas_contact_widget-4" class="widget widget_contact_block clearfix" style="background: #e9e6e0">
      <div id="contact" class="section-wrapper">
         <div class="tg-container">
            <div class="section-title-wrapper">
               <h2 class="main-title">Contact</h2>
                  <h4 class="sub-title">Get in touch with our team.</h4>
               <br />
              <span class="telephone-number" style="margin-bottom: 15px;">9876543210&nbsp;&nbsp;<b>Managalagiri</b></span>
              <span class="telephone-number" style="margin-bottom: 15px;">9876543210&nbsp;&nbsp;<b>Managalagiri</b></span>
              <span class="telephone-number" style="margin-bottom: 15px;">9876543210&nbsp;&nbsp;<b>Managalagiri</b></span>
            </div>
          </div>
        </div>
  </section>-->
 <section id="contact" class="section-padding" style="background-color:#e9e6e0">
    <div class="container">
      <div class="row">
          <div class="col-md-12 text-center">
       <h2 class="main-title">Contact</h2>
      </div>
    </div>
      <div class="row msg-row ">
        <div class="col-md-5 col-sm-4 mr-15 box">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">0939 397 9774 - <span class="contacts-sp">Phone Booking</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00 - 03.00
              </p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-address-card"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">ADDRESS</h4>
              <p class="light-blue regular alt-p">Jayabheri Silicon Towers, Kondapur, Hyderabad</p>
              <p class="light-blue regular alt-p">Leisurebite@gmail.com

               - <span class="contacts-sp">Email</span></p>
               <p class="light-blue regular alt-p">Eshwar Kumar N
               - <span class="contacts-sp">Contact Person</span></p>
            </div>
          </div>
        </div>
        <div class="col-md-7">
        <div  style="width:100%;height:400px;"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54245.62806588213!2d78.34815614093473!3d17.4815987464927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93b416b4a327%3A0x96b5009fad74c163!2sJayabheri+Silicon+Towers!5e0!3m2!1sen!2sin!4v1527053430590" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
      </div>
    </div>
  </section>
   
  <!-- footer -->
  <footer class="footer text-center" style="background: #4b5659">
    <div class="footer-top">
      <div class="row">
    <!-- <div class="col-md-offset-1 col-md-3">
         <div class="hours">
            <ul>
               <li><h2>Working Hours</h2></li>
              <li><p>Monday    .........<span class="time"> 9a.m to 6p.m</span></p></li>
              <li><p>Tuesday   .........<span class="time"> 9a.m to 6p.m</span></p></li>
              <li><p>Wednesday .........<span class="time"> 9a.m to 6p.m</span></p></li>
              <li><p>Thursday  ......... <span class="time"> 9a.m to 6p.m</span></p></li>
              <li><p>Friday    ......... <span class="time"> 9a.m to 6p.m</span></p></li>
              <li><p>Saturday  ......... <span class="time"> 9a.m to 6p.m</span></p></li>
              <li><p>Sunday    ......... <span class="time"> 9a.m to 6p.m</span></p></li>
            </ul>
          </div>
        </div>-->
        <div class=" col-md-12 text-center">
         <!--<div class="widget">
            <h4 class="widget-title">Leisure Bite</h4>
              <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <hr>
            <h5>&copy2018 RAVI LANKE</h5>
          </div>
        </div>--> 
        <div class="col-xs-12 col-sm-5 copy">
           <h4>&copy2018 RAVI LANKE.All Rights Reserved</h4>
        </div>
        
         <div class="col-xs-12 col-sm-6 pull-right"  >
           <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>

      </div>
  </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top" class="animated fadeInRightBig"><i class="fa fa-chevron-up" aria-hidden="true"></i>
</button>

  </footer>
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
<!--  <script src="js/jquery.easing.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
<!--<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>-->
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    </script>-->
  <script type="text/javascript">
  $(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".mainmenu", offset: 50});   
  // Add smooth scrolling on all links inside the navbar
  $("#bs-example-navbar-collapse-1 a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 400, function(){
   
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
    $(document).ready(function(){
      $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 500) {
          $(this).addClass("animated fadeInRight");
        }
    });
  });

    $(window).scroll(function() {
    $(".box").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 500) {
          $(this).addClass("animated fadeInLeft");
        }
    });
  });
}); 
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
</body>
</html>
