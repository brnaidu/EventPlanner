<?php ob_start();
error_reporting(0);
include "secure.php";
include "config.php";
extract($_POST);
extract($_GET);
$patient_register_date=date('Y-m-d');
$patient_register_time=date('H:i:s');
//$pagename=basename($_SERVER['PHP_SELF']);
if(isset($_POST) && $_POST['Submit']=="Register")
{
	$insert=mysqli_query($connect,"INSERT INTO `user` (`username`, `password`, `emailid`, `phoneno`, `cityid`) VALUES ('$username','$password', '$emailid', '$phoneno', '$cityid')");
	
	if($insert)
	{
		
		header("location:register_display.php?id=$Patient_Unique_id");
	}
	else
	{
		header("location:".basename($_SERVER['PHP_SELF'])."?register=no");
	}
	
}
if(isset($_POST) && $_POST['Submituser']=="Login")
{
	$check_query=mysqli_query($connect,"SELECT * FROM `user` WHERE `emailid`='$emailid' AND `password`='$password'");
	$check_query_total=mysqli_num_rows($check_query);
	if($check_query_total==0)
	{
		header("location:index.php?login=no");
	}
	else
	{
		$fetch_query=mysqli_fetch_array($check_query);
		$_SESSION['userid']=$fetch_query['userid'];
		header("location:index.php");
	
		
	}
	
}
/*if(isset($_POST) && $_POST['SubmitOtp']=="Submit")
{
	if(isset($_SESSION['expire']))
	{
		$now = time(); // Checking the time now when home page starts.
		if ($now > $_SESSION['expire']) {
			   unset($_SESSION['rand_code']);
			   unset($_SESSION['expire']);
			   unset($_SESSION['start']);
		 }
		
	}
	
	if($_SESSION['rand_code']==$otp)
	{
		$update=mysqli_query($connect,"UPDATE `bookings` SET `Status_id`='3' WHERE `book_appoitment_id`='$book_appoitment_id'");
		if($update==1)
		{
			unset($_SESSION['rand_code']);
			unset($_SESSION['expire']);
			unset($_SESSION['start']);
			header("location:index.php?cancel=yes");
		}
		else
		{
			header("location:index.php?cancel=not");	
		}
	}
	else
	{
		header("location:index.php?cancel=no");
	}
} */
?>
<script  type="text/javascript">
function calAge(s,i)
{
	if(i==1)
	{
		if(s!='')
		{
			var d = new Date();
			var n = d.getFullYear();
			
			var cy=parseInt(n)-parseInt(s);
			
			document.getElementById("age").value=cy;
			document.getElementById("age").readOnly='true';
		}
		else
		{
			document.getElementById("age").readOnly='';
			document.getElementById("age").value='';
		}
	}
	else 
	{
		if(s!='')
		{
			var d = new Date();
			var n = d.getFullYear();
			//alert(s);
			var cy=parseInt(n)-parseInt(s);
			
			document.getElementById("yy_dob").value=cy;
			document.getElementById("yy_dob").readOnly='true';
			
		}
		else
		{
			
			document.getElementById("yy_dob").readOnly='';
			
		}
		
	}
	
}
</script>

    
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="#" >Event Planner</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                      
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    
      
      
  <!-- For Registration POPUP  -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="register" class="modal fade">
            <div class="modal-dialog">
            	
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#088389;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="color:#FFF" >User Registration</h4>
                    </div>
                    <div class="modal-body" style="background-color:#f2f2f2">
                        <form autocomplete="off" name="register" method="post" action="" enctype="multipart/form-data">
                                    <table  class="table table-hover table-responsive">
                                        <tr>
                                        	<td width="34%" align="left">Name<font color="#FF0000"><strong>*</strong></font></td>
                                      
                                            <td colspan="4" align="left"><input class="form-control" type="text" name="username" id="username" required /></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Email ID<font color="#FF0000"><strong>*</strong></font></td>
                                          
                                          <td colspan="4" align="left"><input class="form-control" type="email" name="emailid" id="emailid"  required autocomplete="off"/></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Password<font color="#FF0000"><strong>*</strong></font></td>
                                          
                                          <td colspan="4" align="left"><input class="form-control" type="password" name="password" id="password" required/></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Mobile Number<font color="#FF0000"><strong>*</strong></font></td>
                                          
                                          <td colspan="4" align="left"><input class="form-control" type="text" name="phoneno" id="phoneno" required/></td>
                                        </tr>
                                        <tr>
                                          <td align="left">City<font color="#FF0000"><strong>*</strong></font></td>
                                          
                                          <td colspan="4" align="left"><select class="form-control" name="cityid" id="cityid" required>
<option value=""> - Select City - </option>
<?php
$city_query=mysqli_query($connect,"SELECT * FROM `city`");
while($city_query_row=mysqli_fetch_assoc($city_query))
{
?>

<option value='<?php echo $city_query_row["City_id"]; ?>'> <?php echo $city_query_row["City"]; ?> </option>
<?php } ?>
</select></td>
                                        </tr>
                                         <tr>
                                          <td align="left">State<font color="#FF0000"><strong>*</strong></font></td>
                                          
                                          <td colspan="4" align="left"><select class="form-control" name="State_id" id="State_id" required>
<option value=""> - Select State - </option>
<?php
$city_query=mysqli_query($connect,"SELECT * FROM `state`");
while($city_query_row=mysqli_fetch_assoc($city_query))
{
?>

<option value='<?php echo $city_query_row["State_id"]; ?>'> <?php echo $city_query_row["State"]; ?> </option>
<?php } ?>
</select></td>
                                        </tr>
                                          <td colspan="6" align="center"><input  type="submit" name="Submit" value="Register" class="btn btn-success" />&nbsp;&nbsp;<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                          </td>
                                        </tr>
                                    </table>
                            	</form>  

                    </div>
                   
                </div>
               
            </div>
        </div>
        
        
        <!-- For Lof=gin Popup -->
         <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="login" class="modal fade">
            <div class="modal-dialog">
            	
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#088389;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="color:#FFF" >User Login</h4>
                    </div>
                    <div class="modal-body" style="background-color:#f2f2f2">
                        <form name="register" method="post" action="" enctype="multipart/form-data">
                                    <table  class="table table-hover table-responsive">
                                         <tr>
                                                <td align="left">Email<font color="#FF0000"><strong>*</strong></font></td>
                                               
                                                <td colspan="4" align="left"><input class="form-control" type="email" name="emailid" id="emailid_login"  required="required"/></td>
                                              </tr>
                                              <tr>
                                              <td align="left">Password<font color="#FF0000"><strong>*</strong></font></td>
                                              
                                              <td colspan="4" align="left"><input class="form-control" type="password" name="password" id="password_login" required/></td>
                                            </tr>
                                       <tr>
                                          <td colspan="6" align="center"><input  type="submit" name="Submituser" value="Login" class="btn btn-success" />&nbsp;&nbsp;<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                          </td>
                                        </tr>
                                    </table>
                            	</form>  

                    </div>
                   
                </div>
               
            </div>
        </div>
        
        
        
      