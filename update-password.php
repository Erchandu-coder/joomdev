<?php
	include('header.php');
    $user_id = $_SESSION['user_id'];
?>    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Password Update</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="update_password.php" method="POST">
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"> <!-- User ID from the admin panel -->
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">New Password</label>
									    <input type="password" class="form-control" name="new_password" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Confirm Password</label>
									    <input type="password" class="form-control" name="confirm_password" required>
									</div>
									<button type="submit" class="btn app-btn-primary" >Update Password</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
                <?php
	include('footer.php')
?>