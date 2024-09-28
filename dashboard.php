<?php
	include('header.php');
?>
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Overview</h1>

            <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <div class="inner">
                    <div class="app-card-body p-3 p-lg-4">
                        <h3 class="mb-3">Welcome, <?php 
                                if(isset($_SESSION['admin_id'])){                                
                                echo $_SESSION['username'];
                                }else{
                                echo $_SESSION['user_email'];
                                } ?>!</h3>
                        <div class="row gx-5 gy-3">
                            <div class="col-12 col-lg-9">

                                <div>"This application was developed by Chandrakant for JoomDev company."</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//app-card-body-->

                </div>
                <!--//inner-->
            </div>
            <!--//app-card-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-content-->
<?php
	include('footer.php')
?>