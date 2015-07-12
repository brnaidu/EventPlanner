<?php
ob_start();
include "secure.php";
include "config.php";
extract($_POST);
extract($_GET);
error_reporting(0);

$course_query = mysqli_query($connect,"SELECT * FROM `events`");
				while($course_query_row = mysqli_fetch_assoc($course_query))
				{
$eventid=$course_query_row['eventid'];
$esid=0;
?>
     <div class="span3" id="sidebar">
                  <ul class="nav nav-pills nav-stacked">
  
  <li role="presentation" class="active"><a href="index.php?id=<?php echo $eventid."&id1=".$esid;  ?>"><?php echo $course_query_row['eventname']; ?></a></li>



</ul>
                </div>
			<?php }	?>