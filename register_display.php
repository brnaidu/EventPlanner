<?php ob_start();
include "secure.php";
include "config.php";

include "pageing.php";
extract($_POST);
extract($_GET);
error_reporting(0);

$patient=mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM `patient` WHERE `Patient_Unique_id`='$id'"));
$city=mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM `city` WHERE `City_id`='$patient[City_id]'"));
$state=mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM `state` WHERE `State_id`='$patient[State_id]'"));
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from bootstraptaste.com/theme/siimple/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Jan 2015 06:35:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.html">

    <title>Medserv</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <link href="assets/hosting.css" rel="stylesheet">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/jquery-1.8.0.min.js"></script>
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
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
    	<?php include "header.php"; ?>
    </div>
    <div id="header">
   <?php include "alerts.php"; ?>
  	 <div class="row">
        	<div class="col-md-2">&nbsp;</div>
            <div class="col-md-10"><a href="index.php" style="color:#000"><i class="fa fa-home fa-2x"></i></a></div>
        </div>
        <div class="row">&nbsp;</div>
    	<div class="row">
        	<div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
            	
                <div id="printablediv">
                    <table class="table table-hover table-responsive table-bordered">
                         <tr>
                                        	<td width="34%" align="left">Name</td>
                                      
                                            <td colspan="4" align="left"><?php echo $patient['patient_name']; ?></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Email ID</td>
                                          
                                          <td colspan="4" align="left"><?php echo $patient['emailid']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td align="left">Mobile Number</td>
                                          
                                          <td colspan="4" align="left"><?php echo $patient['Phone_number']; ?></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Address Line 1</td>
                                          
                                          <td colspan="4" align="left"><?php echo $patient['Address_line1']; ?></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Address Line 2</td>
                                          
                                          <td colspan="4" align="left"><?php echo $patient['Address_line2']; ?></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Land Mark</td>
                                          
                                          <td colspan="4" align="left"><?php echo $patient['Land_mark']; ?></td>
                                        </tr>
                                       
                                        <tr>
                                          <td align="left">City</td>
                                          
                                          <td colspan="4" align="left"><?php echo $city['City']; ?></td>
                                        </tr>
                                         <tr>
                                          <td align="left">State</td>
                                          
                                          <td colspan="4" align="left"><?php echo $state['State']; ?></td>
                                        </tr>
                                        <tr>
                                          <td align="left">Gender</td>
                                          
                                          <td  colspan="4" align="left"><?php echo $patient['Gender']; ?></td>
                                        
                                        </tr>
                                        <tr>
                                          <td align="left">Date Of Birth</td>
                                          
                                          <td align="left" colspan="4"><?php echo $patient['DOB']; ?>
                                          	
                                          </td>

											
                                        </tr>
                                        <tr>
                                          <td align="left">Date Of Anniversary</td>
                                          <td align="left" colspan="4"><?php echo $patient['Date_Anniversary']; ?>
                                          	
                                          </td>

											                                     
                                        </tr>
                    </table>
                 </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
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
    
    
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
