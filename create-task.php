<?php
	include('header.php');
?>
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Settings</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="alert alert-success" role="alert" id="success" style="display:none"></div>
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <div class="alert alert-success" role="alert" id="success" style="display:none"></div>
                    <div class="alert alert-danger" role="alert" id="error" style="display:none"></div>
                    <form class="settings-form" id="registerForm">
                        <div class="col-12 col-md-12 row">
                            <div class="col-12 col-md-6">
                                <input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Start Time</label>
                                    <input type="datetime-local" class="form-control" id="start_time" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Stop Time</label>
                                    <input type="datetime-local" class="form-control" id="stop_time" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Note</label>
                                <input type="text" class="form-control" id="note" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Description</label>
                                <textarea class="form-control" id="description" max="5000" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn app-btn-primary" id="create-button">Save Changes</button>
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