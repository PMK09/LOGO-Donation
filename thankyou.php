<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LOGO</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		<!-- CSS Styles -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" href="css/styles.css">
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		<!-- Bootstrap Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body>
	
		<!-- Navigation Bar -->
		<section class="navbar-section">
			<!-- Nav Bar -->
			<nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top">
					<a class="navbar-brand" href="index.html">LOGO</a>
					<button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
		</section>
		
		<!-- Thank You -->
		<section class="thank-you">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<h1 class="text-center">Thank You For Donating!</h1>
						<?php
						
							include 'instamojo/Instamojo.php';
							$api = new Instamojo\Instamojo('test_3edcca6ee59ef17be0a9bf7a429', 'test_db8ac4325456e220cbd50e240bf', 'https://test.instamojo.com/api/1.1/');
							
							$payid=$_GET['payment_request_id'];
							
							try{
								$response = $api->paymentRequestStatus($payid);
								
							?>
							
								<img src="images/done.gif" alt="description of gif" /><br/>
								<center><h2>Payment Details</h2></center>
								<table class="table table-bordered">
									<tr>
										<th>Donated To :</th>
										<td><?= $response['purpose']; ?></td>
									</tr>
									<tr>
										<th>Payment ID :</th>
										<td><?= $response['payments'][0]['payment_id']; ?></td>
									</tr>
									<tr>
										<th>Payee Name :</th>
										<td><?= $response['payments'][0]['buyer_name']; ?></td>
									</tr>
									<tr>
										<th>Payee Email :</th>
										<td><?= $response['payments'][0]['buyer_email']; ?></td>
									</tr>
								</table>
							
							<?php
							
							}
							catch(Exception $e){
								print("Error: ".$e->getMessage());
							}
						
						?>
					</div>
				</div>
			</div>
		</section>
		
	</body>
</html>
