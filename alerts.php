
<?php
			if(isset($register))
			{
				?>
   				<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($register=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Successfully Completed.
									 </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Registration Operation Failed Due To Duplicate Email Or Something Wrong.
                                    </div>
                                <?php
							}
							
							?>
								 
						</div>
						
					</div>
                    <?php
			}
			?>
            <?php
			if(isset($booking))
			{
				?>
   				<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($booking=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Successfully Completed.
									 </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Booking Operation Failed.
                                    </div>
                                <?php
							}
							
							?>
								 
						</div>
						
					</div>
                    <?php
			}
			?>
            <?php
			if(isset($guest))
			{
				?>
   				<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($guest=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Successfully Completed.
									 </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										You Are an registered user.Please Login to continue Booking.
                                    </div>
                                <?php
							}
							
							?>
								 
						</div>
						
					</div>
                    <?php
			}
			?>
            <?php
			if(isset($cancel))
			{
				?>
   				<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($cancel=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Successfully Your Booking Cancelled.
									 </div>
                                <?php
							}
							else if($cancel=="not")
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Cancel Operation Failed
                                    </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										You Enter Wrong OTP.
                                    </div>
                                <?php
							}
							?>
								 
						</div>
						
					</div>
                    <?php
			}
			?>
			
            <?php
			if(isset($insert))
			{
				?>
   				<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($insert=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Successfully Booked.
									 </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Booking Operation Failed.
                                    </div>
                                <?php
							}
							?>
								 
						</div>
						
					</div>
                    <?php
			}
			?>

            
            <?php
			if(isset($login))
			{
				?>
   				<div class="row">
						<div class="col-lg-4">
						&nbsp;
						</div>
						<div class="col-lg-4" style="text-align:center">                       
							<?php
							if($login=="yes")
							{
								?>
									<div class="alert alert-success  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Successfully Login.
									 </div>
                                <?php
							}
							else
							{
								?>
									<div class="alert alert-danger  fade in">
										<button data-dismiss="alert" class="close close-sm" type="button">
										  x
										</button>
										Login Operation Failed.Email Id And Password mismatch
                                    </div>
                                <?php
							}
							?>
								 
						</div>
						
					</div>
                    <?php
			}
			?>