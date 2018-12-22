function delcookie()
         {
          var c=document.cookie;
          var mytest1=c.split(';');
    //      //alert("before closing:"+mytest1[0]+" "+mytest1[1]);
          var v1=mytest1[0].substr(0,mytest1[0].search("="));
          var v2=mytest1[1].substr(0,mytest1[1].search("="));
          var v3=mytest1[2].substr(0,mytest1[2].search("="));
      //    //alert(v1+"  "+v2);
          document.cookie = mytest1[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
          document.cookie = mytest1[1]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
          document.cookie = mytest1[2]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        //  //alert("close");
          window.location.assign("logout.php?p1="+v1+"&p2="+v2+"&p3="+v3);   
}
/*
"use strict"
var app=angular.module("dashboard",[]);
*/