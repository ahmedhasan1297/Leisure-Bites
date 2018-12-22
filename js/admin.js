(function(){
        var c=document.cookie;
        var mytest1=c.split(';');
      // console.log(document.cookie);
        var check=document.cookie;
        var i=mytest1[0].search("=");
        i=i+1;
        if(mytest1[0].charAt(i)=="x")
        {
        		
        }
        else
        {
          window.location.assign("index.php");
        }
 }());
function delcookie()
         {
          var c=document.cookie;
          var mytest1=c.split(';');
    //      //alert("before closing:"+mytest1[0]+" "+mytest1[1]);
          var v1=mytest1[0].substr(0,mytest1[0].search("="));
          var v2=mytest1[1].substr(0,mytest1[1].search("="));
      //    //alert(v1+"  "+v2);
          document.cookie = mytest1[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
          document.cookie = mytest1[1]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        //  //alert("close");
          window.location.assign("logout.php?p1="+v1+"&p2="+v2);   
}