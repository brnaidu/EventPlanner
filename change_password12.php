<?php ob_start();
include "secure.php";
include "config.php";

//include "pageing.php";
extract($_POST);
extract($_GET);
error_reporting(0);


$patient=mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM `user` WHERE `userid`='$_SESSION[userid]'"));
if(isset($_POST) && $_POST['Submit']=="Update")
{
	
	$update=mysqli_query($connect,"UPDATE `user` SET `password`='$new_password' WHERE `userid`='$userid'");
	
	if($update==1)
	{
		header("location:change_password.php?update=yes");	
		//echo"yes";
	}
	else
	{
		header("location:change_password.php?update=no");
		//echo "no";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shapebootstrap.net/demo/html/flat_theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jul 2015 15:45:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Events</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
    <!-- Bootstrap 
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">-->

    <!-- siimple style -->
   
    <link href="css/style.css" rel="stylesheet">
    
      <link rel="stylesheet" type="text/css" href="css/auto.css" />
        <style type="text/css">
.container_table_div{
    display:table;
    width:100%;
    border-collapse: collapse;
    }
.container_table_div1{
    display:table;
    width:70%;
    border-collapse: collapse;
    }
.heading_table_div{
     font-weight: bold;
     display:table-row;
     background-color:#FFF;
     text-align: center;
     
     font-size: 12px;
    	
     color:#63C;
    
}
.table-row_table_div{  
	 
     display:table-row;
     text-align: center;
}
.col_table_div{
display:table-cell;
border: 0px solid #696;
font-size:12px;
width:43px;


font-family:Arial, Helvetica, sans-serif;
}
label {

	cursor:pointer;
}
</style>
<script language="javascript" type="text/javascript">
        function printDiv(s) {
            //Get the HTML of div
            var divElements = document.getElementById(s).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    <script type="text/javascript">
function checkPassword()
{
  if(document.form1.new_password.value!=document.form1.repeat_password.value)
  {
	alert("New Password And Repeat Passwords Are Mismatch");
	document.form1.new_password.focus();
	return false;  
  }
  if(document.form1.password.value!=document.form1.old_password.value)
  {
	alert("Old Password Wrong");
	document.form1.old_password.focus();
	return false;  
  }
  return true;
}

</script>

</head><!--/head-->
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
    	<?php include "header.php"; ?>
    </div>
    <div id="header">
   <?php include "alerts.php"; ?>
    <?php
				if(isset($update))
				{
					?>
				
					<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($update=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  <i class="fa fa-times"></i>
										</button>
										Successfully Password Updated.
									 </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  <i class="fa fa-times"></i>
										</button>
										Update Operation Failured.
                                    </div>
                                <?php
							}
							?>
								 
						</div>
						<div class="col-lg-4">
						&nbsp;
						</div>
					</div>
					<?php 
					} 
					?>
   		<div class="row">
        	<div class="col-md-1">&nbsp;</div>
            <div class="col-md-11"><a href="index.php" style="color:#000"><i class="fa fa-home fa-2x"></i></a></div>
        </div>
        <div class="row">&nbsp;</div>
    	<div class="row">
        	<div class="col-md-1">&nbsp;</div>
            <div class="col-md-10">
            	
                <div id="printablediv">
                      <form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return checkPassword();">
<table  class="table table-advance table-bordered table-condensed table-hover" >
<tr>
<td colspan="2" align="center"><strong>Change Password</strong></td>
</tr>
<input type="hidden" name="password" value="<?php echo $patient['password'];?>">
<tr align="center" >
<td  colspan="2"><input class="form-control" type="password" name="old_password" id="old_password" placeholder="Old Password" required/></td>
</tr>
<tr align="center">
<td  colspan="2"><input class="form-control" type="password" name="new_password" id="new_password" placeholder="New Password"  required/></td>
</tr >
<tr align="center" >
<td  colspan="2"><input class="form-control" type="password" name="repeat_password" id="repeat_password" placeholder="Repeat Password"  required/></td>
</tr>
<tr align="center">
<td colspan="3"><input type="submit" value="Update" name="Submit" class="btn btn-success"></td>
</tr>
</table>
 <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
</form>
                 </div>
            </div>
            <div class="col-md-1">&nbsp;</div>
        </div>
        <div class="row">&nbsp;</div>
         <div class="form-group"  id="loading2" style="display:none">
            <img src="doctor/img/loading_bar.gif">
         </div>
      	<div class="row" id="ajaxdisplayid">
        
        </div>
    </div>
  <footer class="footer">
    <?php include "footer.php"; ?>
    </footer>
    
    
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
