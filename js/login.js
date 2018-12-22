(function(){
        var c=document.cookie;
        var mytest1=c.split(';');
      // console.log(document.cookie);
        var check=document.cookie;
        var i=mytest1[0].search("=");
        i=i+1;
        if(mytest1[0].charAt(i)=="x")
        {
        	window.location.assign("index.php");	
        }
        else
        {
          
        }
 }());



	"use strict"
	var app=angular.module("contact",[]);
	app.controller("manage",function($scope){
		$scope.collect="";
/*		$scope.redirect=function(){
			window.location.assign("regis.html");
		}*/
	});
