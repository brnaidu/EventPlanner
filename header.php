<script type="text/javascript">
function modifyFields(s)
{
	
	if(s==0)
	{
		    document.getElementById("emailid").value='';
			document.getElementById("password").value='';
		
	}
	else if(s==1)
	{
		
		    document.getElementById("emailid_login").value='';
			document.getElementById("password_login").value='';
		
	}
	
}
</script>
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
         
        </div>
        <div class="navbar-collapse collapse">
           
          <ul class="nav navbar-nav navbar-right">
            
            <?php
			if($_SESSION['userid']!='')
			{
				$result_patient=mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM `user` WHERE `userid`='$_SESSION[userid]'"));
				?>
                  
              	<li><a href="my_profile.php">My Profile</a></li>
                <li><a href="my_bookings.php">My Orders</a></li>
                <li><a href="change_password.php">Change Password</a></li> 
                <li><a href="logout.php">Logout</a></li> 
				<?php	
			}
			else
			{
			?>
            	
				<li class="active"><a data-toggle="modal" href="#login" onclick="return modifyFields(1);">Sign in</a></li>
                <li><a data-toggle="modal" href="#register" onclick="return modifyFields(0);">Register</a></li>
            <?php
			}
			?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      
      		