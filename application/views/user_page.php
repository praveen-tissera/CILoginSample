<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: login");
}
?>
<head>
<?php $this->load->view('head'); ?>
<title>User Page</title>
</head>
<body>


<!-- Navigation -->
    <?php $this->load->view('nav'); ?>




<div class="container" style="margin-top:60px;">

		<div class="row text-center">
			<div class="col-sm-12">
				

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">MY ACCOUNT</h3>
    </div>
    <div class="panel-body">
        <p><a href="#">Edit your account information</a></p>
        <p><a href="#">Change your password</a></p>
        <p><a href="#">Modify your address book entries</a></p>
        <p><a href="#">Modify your wish list</a></p>
      </div>

</div>

<div class="ppanel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">MY ORDERS</h3>
    </div>
    <div class="panel-body">
        <p><a href="#">View your order history</a></p>
        <p><a href="#">Downloads</a></p>
        <p><a href="#">Your Reward Points</a></p>
        <p><a href="#">View your return requests</a></p>
        <p><a href="#">Your Transactions</a></p>
      </div>

</div>

			</div>


		</div>
     
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Ozi Tea 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
</body>
</html>
<?php $this->load->view('script'); ?>