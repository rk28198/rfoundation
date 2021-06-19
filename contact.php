<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="raj.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>


		

		#contact{
		width: 100%;
		height: 88%;
		position: absolute;
		background-image: url(img/i1.jpg);
		background-size: cover;
}
.contact-form{
	padding: 30px;


}

.form-control{
	border-radius: 0 !important;
	border: none !important;
}

:: placeholder{
	color: #999 !important;

}

.follow{
	background:#fff;
	padding: 10px;
	margin: 15px;
}
.cantact-info .fa{
	margin: 10px;
	color: #007bff;
	font-weight: bold;
}
h1{
	text-align: center;
	color: #555 !important;
	padding-bottom: 20px;

}
h1::after{
	content: '';
	background:#007bff;
	display: block;
	height: 3px;
	width: 170px;
	margin:10px auto 5px;
</style>
</head>
<body>
<?php include 'base.php'; ?>

	<section id="contact">
		<div class="container">
			<h1>Get In Touch</h1>
			<div class="row">
				<div class="col-md-6">
					<form class="contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name" name="name">
						</div>
						<div class="form-group">
							<input type="numbere" class="form-control" placeholder="Mobile No." name="phone">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email-Id" name="email">
						</div>
						<div class="form-group">
							<textarea class="form-control" row="4" placeholder="message" name="message"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
					</form>
				</div>
				<div class="col-md-6 cantact-info">
					<div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i> 306, Nawabganj Kanpur 208002 U.P</div>
				
				
					<div class="follow"><b>Phone No.:</b><i class="fa fa-phone"></i> +91 9305996556</div>
				

					<div class="follow"><b>Email:</b> <i class="fa fa-envelope"></i>Admin@rfoundations.com</div>
					<div class="follow"><label><b>Get Social</b></label>

						<a href="#"> <i class="fa fa-facebook"></i></a>
							<a href="#"> <i class="fa fa-youtube-play"></i></a>
								<a href="#"> <i class="fa fa-twitter"></i></a>
									<a href="#"> <i class="fa fa-google-plus"></i></a>


					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
      <div class="main-content">
        <img class="img" src="logo.jpg">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>R_Foundation is a non-profit organization We help those children who are not able to get a proper education due to there critical condition & situation, our organization helps them to achieve the knowledge which they deserve like others student by which they build their own good & proper career</p>
            <div class="social">
              <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">306, Nawabganj Kanpur 208002 U.P</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91 9305996556</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">Admin@rfoundations.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="">R . Tech</a> | </span>
          <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
        </center>
      </div>
    </footer>

</body>
</html>
