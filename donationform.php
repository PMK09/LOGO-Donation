<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LOGO</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		<!-- CSS Styles -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
		<!-- Font Awesome -->
		<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
		<!-- Bootstrap Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body>
	
		<?php
		
			$imag = $_POST['myfile'];;

			if ($imag == 0)
			{
				$add="images/Indian_emb.jpg";
				$pur="PM Donation";
			}
			
			elseif ($imag == 1)
			{
				$add="images/Andhra_emb.jpg";
				$pur="Andhra Pradesh CM Donation";
			}
			
			elseif ($imag == 2)
			{
				$add="images/telangana_emb.jpg";
				$pur="Telangana CM Donation";
			}
			
			elseif ($imag == 3)
			{
				$add="images/tamil_emb.jpg";
				$pur="Tamil Nadu CM Donation";
			}
			
			elseif ($imag == 4)
			{
				$add="images/kar_emb.jpg";
				$pur="Karnataka CM Donation";
			}
			
			elseif ($imag == 5)
			{
				$add="images/ker_emb.jpg";
				$pur="Kerala CM Donation";
			}
			
			elseif ($imag == 6)
			{
				$add="images/odi_emb.jpg";
				$pur="Orissa CM Donation";
			}
			
			elseif ($imag == 7)
			{
				$add="images/goa_emb.jpg";
				$pur="Goa CM Donation";
			}
			
			elseif ($imag == 8)
			{
				$add="images/Maha_emb.jpg";
				$pur="Maharashtra CM Donation";
			}
			
			elseif ($imag == 9)
			{
				$add="images/mdp_emb.jpg";
				$pur="Madhya Pradesh CM Donation";
			}
			
			elseif ($imag == 10)
			{
				$add="images/chh_emb.jpg";
				$pur="Chhattisgarh CM Donation";
			}
			
			elseif ($imag == 11)
			{
				$add="images/wesb_emb.jpg";
				$pur="West Bengal CM Donation";
			}
			
			elseif ($imag == 12)
			{
				$add="images/Jha_emb.jpg";
				$pur="Jharkhand CM Donation";
			}

		?>
		
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
		
		<!-- Donation Form --><br/><br/>
		<?php echo "<h4> Donate to " . $pur . "</h4>"; ?>
		<form class="formdonate" action="payment.php" method="post">
			<div class="col-md-4 offset-md-4">
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<?php echo "<img src='$add' style='width:100px; height:100px; border-radius:50%;'><br>"; ?>
						</div>
						<div>
							<p align="left" style="font-size:16px;"><span class="red-star" style="color:red;">★</span>Please read the note below before donating</p>
						</div>
						<div class="form-group">
							<input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<input class="form-control form-control-lg" type="email" name="email" pattern=".+@gmail.com" size="10" required placeholder="Email">
						</div>
						<div class="form-group">
							<input class="form-control form-control-lg" type="tel" name="phone" pattern="[0-9]{10}" required placeholder="Phone">
						</div>
						<div class="form-group">
							<input class="form-control form-control-lg" type="number" name="amount" min="0" placeholder="Amount">
						</div>
						<input type="hidden" name="scheme" value="<?= $pur; ?>">
						<div class="form-group">
							<button class="button" type="submit" style="vertical-align:middle"><i class="fas fa-rupee-sign"></i>&nbsp;<span>Donate</span></button>
						</div>
						</div>
            				<h5 align="left" style="margin-top:10px;">Note : </h5><p>This site is purely just for learning or testing purpose only. <b>This site is not the original site to donate
            				for PM Donation as well as CM Donation</b>. So we request the donors to not submit your original bank details in the forms. We are not responsible for your transactions.</p>
            			</div>
					</div>
				</div>
			</div>
		</form>

		<!-- footer -->
		<footer class="footer-section donate-footer" id="footer">
			<div class="container-fluid">
				<a href="https://github.com/PMK09"><i class="social-icon fab fa-github icons"></i></a>&nbsp;&nbsp;
				<a href="https://www.instagram.com/manojkumarpotnuru/?hl=en"><i class="social-icon fab fa-instagram icons"></i></a>&nbsp;&nbsp;
				<a href="https://www.linkedin.com/in/potnurumanojkumar-a72732192/"><i class="social-icon fab fa-linkedin-in icons"></i></a>
				<p>© Copyright 2020 LOGO</p>
			</div>
		</footer>
	</body>
</html>
