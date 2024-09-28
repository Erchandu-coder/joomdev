<?php
	include('header.php');
?>
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
        <div class="alert alert-success" role="alert" id="success" style="display:none"></div>
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                    <div class="alert alert-success" role="alert" id="success" style="display:none"></div>
                    <div class="alert alert-danger" role="alert" id="error" style="display:none"></div>
                        <form class="settings-form" id="registerForm">
                            <div class="col-12 col-md-12 row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="first_name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last_name"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 row">
                                <div class="col-12 col-md-8">
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Password</label>
                                        <input type="text" class="form-control" id="password" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">

                                    <div class="mb-3">
									<label for="setting-input-2" class="form-label"></label><br>
									<button type="button" class="btn btn-warning" id="generate-button">Generate Password</button>                                       
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary" id="save-button">Save Changes</button>
                        </form>
                    </div>
                    <!--//app-card-body-->

                </div>
                <!--//app-card-->
            </div>
        </div>
    </div>
    <!--//container-fluid-->
</div>
<?php
	include('footer.php')
?>