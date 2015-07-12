<?php
ob_start();
include "secure.php";
include "config.php";
extract($_POST);
extract($_GET);
error_reporting(0);

$course_query = mysqli_query($connect,"SELECT * FROM `e_es` where `eid`='$id'");

				while($course_query_row = mysqli_fetch_assoc($course_query))
				{
					
?>


     <div class="span3" id="sidebar">
      
                  <ul class="nav nav-pills ">
                  <?php $esid= $course_query_row['esid'];
						$eid_query = mysqli_query($connect,"SELECT * FROM `eventservices` where `esid`='$esid'");				
while($eid_query_row = mysqli_fetch_assoc($eid_query))
				{?>
 
  <li role="presentation" class="active"><a href=""index.php?id=<?php echo $id; ?>.&.id1=<?php echo $eid_query_row['esid']; ?>"><?php echo $eid_query_row['esname']; ?></a></li>
<?php }	}?>

</ul>
                </div>
                