<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
	<path fill="#f3f4f5" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,101.3C384,117,480,171,576,170.7C672,171,768,117,864,128C960,139,1056,213,1152,218.7C1248,224,1344,160,1392,128L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
</div>
<!-- Main -->
<div class="container-fluid heading" style="text-align: center;">
	<div class="row">
		<div class="col-md-12">
			<p>Get your grey cells running !</p>
			<h1>Take a Quiz</h1>
		</div>
	</div>
	<div class="row" style="padding: 5%;">
		<div class="col-md-6">
			<p>Already a member? Hop in !</p>
			<button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#myModal" href="#">Login</button>
		</div>
		<div class="col-md-6">
			<p>We've been expecting you ! Come join us </p>
			<button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#myModal2" href="#">Register</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>Happy Quizzing ! Stay Curious</h3>
		</div>
	</div>
</div>
<!-- Main -->
<div class="wave">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#f3f4f5" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,101.3C384,117,480,171,576,170.7C672,171,768,117,864,128C960,139,1056,213,1152,218.7C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
	</svg>
</div>
<!--Login Modal -->
<div class="login">
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" style="max-width:500px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="exampleModalLabel">Login form</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="needs-validation" novalidate>
						<div class="form-group">
							<label for="InputEmail1">Email address</label>
							<input type="email" class="form-control form-control-sm" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
							<div class="invalid-feedback"> Please provide a valid email address. </div>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="InputPassword1">Password</label>
							<input type="password" class="form-control form-control-sm" id="InputPassword1" placeholder="Password" required>
							<div class="invalid-feedback"> The password is invalid! </div>
						</div>
						<div class="form-check">
							<label class="form-check-label" for="Check1">
								<input type="checkbox" class="form-check-input" id="Check1"> Remember me</label>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success btn-sm" onclick="display alert">Log in</button>
				</div>
			</div>
		</div>
	</div>
	<!--Register Modal -->
	<div class="login">
		<div class="modal fade" data-keyboard="false" data-backdrop="static" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-dialog-centered" style="max-width:600px" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title" id="exampleModalLabel">Registration form</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="register.php" name="form2" method="post">
							<div class="form-group">
								<label for="InputName2">Name</label>
								<input type="text" name="name" class="form-control form-control-sm" id="InputName2" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="InputEmail2">Email address</label>
								<input type="email" name="email" class="form-control form-control-sm" id="InputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="InputPassword2">Password</label>
								<input type="password" name="password" class="form-control form-control-sm" id="InputPassword2" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="ConfirmPassword2">Confirm Password</label>
								<input type="password" name="confirm" class="form-control form-control-sm" id="ConfirmPassword2" placeholder="Password">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
						<button type="submit" name="submit2" class="btn btn-success btn-sm">Register</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<script>
			function addDocument() {
				var addDtDeadline = $("#addDtDeadline").val();
				var companyName = $("#addDtCompanyName").val();
				if (newDate(addDtDeadline) == "Invalid Date") {
					toastr["warning"]("InvalidDeadline");
					$("#addDtDeadline").focus();
				}
			}
		</script>
		<?php if (isset($_POST['submit2'])) {
      $count = 0;
      ($res = mysqli_query(
          $link,
          "select * from registration where  email='$_POST[email]'"
      )) or die(mysqli_error($link));
      $count = mysqli_num_rows($res);
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$confirm=$_POST['confirm'];
			if($name==''||$email==''||$password=='')
			{?>
				<script type="text/javascript">
					window.alert("All fields are required. ");
				</script>
				<?php
				exit();
			}
			if($password!=$confirm)
			{
				?>
					<script type="text/javascript">
						window.alert("The passwords don't match. Retype password correctly");
					</script>
					<?php
					exit();
			}
			if ($count > 0) { ?>
			<script type="text/javascript">
			window.alert("Account with this email address already exists.\nLogin to continue or register with a different account ");
		  </script>
			<?php
			exit();
		  }
			else
			{
				mysqli_query(
              $link,
              "insert into registration values (NULL,'$_POST[name]','$_POST[email]','$_POST[password]')"
          );
				?>
		<script type="text/javascript">
			window.alert("Congratulations! You are succesfully registered.\nLogin to continue. ");
		</script> <?php }
  } ?>
		<!--script-->
		<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
				'use strict';
				window.addEventListener('load', function() {
					// Fetch all the forms we want to apply custom Bootstrap validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
		</script>
		<!--script-->
		<!-- Footer -->
		<div class="container-fluid footer bg-dark text-center" style="padding: 2.5% 20%;">
