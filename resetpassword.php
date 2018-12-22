<?php
	$uemail=$_GET['email'];
	$passwordtoken=$_GET['passwordtoken'];
	$conn = new mysqli('localhost', 'root', '', 'database');
	// Check connection
	//echo "Hai in database";
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * from mail where email='$uemail' and passwordtoken='$passwordtoken'";
	//echo $grp_id." ".$uemail." ".$cemail."<br>";
	$result = $conn->query($sql);
	if($result==true)
	{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
		  	<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="regis.css">
			<script type="text/javascript" src="js/angular.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script type="text/javascript">
				"use strict"
				var app=angular.module("contact",[]);
				app.controller("manage",function($scope,reset_password_details){
					$scope.collect="";
					$scope.email="<?php echo $uemail ?>"
					$scope.reset_det=function(){
						reset_password_details.reset_password($scope);
					}
				});
			        //Function for checking the confirm password
		            app.directive("checkme",function(){
		               return{
		            require:'^form',
		            restrict:'A',                         
		            link:function(scope,element,attrs,forminfo)
		            {
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
		                   app.service("reset_password_details",function($http){
            this.reset_password=function(v){
                //alert(group_id);
                
                //alert(email);
                var request = $http({ 
                     method: "post", 
                     url: "reset12.php", 
                     headers:{'content-type':'application/x-www-form-urlencoded'}, 
                     transformRequest: function(obj) {
                                                  var str = [];
                                                  for(var p in obj)
                                                  {
                                                        //console.log(p);
                                                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                                  }                                                      
                                                    alert(str.join("&"));
                                                    return str.join("&");
                                            },
                     data: { 
                      	 mail: v.email,
                         password :  v.password
                     } 
                 }); 
  
                 // Store the data-dump of the FORM scope. 
                 request.success( 
                     function( data ) { 
                         // alert(group_id);
                         //alert(JSON.stringify(data));
                         window.location.assign('index.php');
                      /*   if(data=="0[]")
                         {
                           //alert("my result zero");
                           //v.collect_contact_inf=[{name:"",phno:"",uemail:"",cemail:"",g_id:""}];
                           v.collect_contact_inf="";
                         }
                         else
                         {
                            v.collect_contact_inf= data;  
                         }*/ 
                        
                         
                         //alert(JSON.stringify(v.collect_contact_inf)); 
                     } 
                 ); 


            }
       });


			</script>
		</head>
		<body ng-app="contact" ng-controller="manage">
			<div class="container">
				<div class="row form_row">
					<div class="col-md-4 form_col"></div>
					<div class="col-md-4">
						<form method="post" name="resetform"  novalidate>
							<div>
								<label class="labelname">Password:</label>
								<!--<label class="req">*</label>-->
								<input class="form-control" type="password" name="password" ng-model="password" ng-pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[*&_!@.]).{8,}$/" maxlength="20" ng-minlength="8">
								<details>
									<summary>Strong Password</summary>
									<p>Must contain UPPERCASE,lowercase,digit,special character</p>
								</details>
								<span ng-show="resetform.password.$error.pattern"> Not a strong password</span>
							</div>
							<div>
								<label class="labelname">Confirm Password:</label>
								<!--<label class="req">*</label>-->
								<input class="form-control" type="password" name="confirm" ng-model="repassword">
								<span  checkme ng-show="resetform.confirm.$dirty"></span>
							</div>
							<button ng-disabled="resetform.$invalid" type="button" ng-click="reset_det()" class="btn btn-success">submit</button>
						</form>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</body>
		</html>
		<?php		
	}	
    else
    {
    	header('Location: login.html');	
    }	
?>