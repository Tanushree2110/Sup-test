<!DOCTYPE html>
<html>
    <head>
        <title>Quiz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/modal.css">
      </head>
    <body>

        <!-- Navigation bar -->
        <nav class="navbar navbar-expand justify-content-between bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" style="margin-left: 10%;" href="#"><h3><b>Quiz Club</b></h3></a>
              <ul class="navbar-nav" style="margin-right: 20%;">
                <li class="nav-item" style="margin-right: 10%;">
                  <a class="nav-link active" href="#"><h5>Home</h5></a>
                </li>
                <li class="nav-item" style="margin-right: 10%;">
                  <a class="nav-link" data-toggle="modal" data-target="#myModal"  href="#"><h5>Login</h5></a>
                </li>
                <li class="nav-item" style="margin-right:
               10%;">
               <a class="nav-link" data-toggle="modal" data-target="#myModal2"  href="#"><h5>Register</h5></a>

              </ul>
        </nav>
        <!-- Navigation bar -->
        <!-- Button trigger modal -->




        <!-- Main -->
        <div class="container-fluid heading" style="text-align: center; padding: 10%;">
            <div class="row">
                <div class="col-sm-12">
                    <p>Get your grey cells running !</p>
                    <h1>Take a Quiz</h1>
                </div>
            </div>

            <div class="row" style="padding: 5%;">
                <div class="col-sm-6">
                    <p>Already a member? Hop in !</p>
                    <button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#myModal"  href="#">Login</button>
                </div>
                <div class="col-sm-6">
                    <p>We've been expecting you ! Come join us </p>
                    <button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#myModal2"  href="#">Register</button>
                </div>
            </div>
        </div>
        <!-- Main -->

        <!--Login Modal -->
        <div class="login">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered" style="max-width:500px" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Login form</h6>
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                    <div class="modal-body">
                      <form class="needs-validation" novalidate>
        <div class="form-group">
          <label for="InputEmail1">Email address</label>
          <input type="email" class="form-control form-control-sm"  id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          <div class="invalid-feedback">
                Please provide a valid email address.
              </div>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control form-control-sm" id="InputPassword1" placeholder="Password" required>
          <div class="invalid-feedback">
                The password is invalid!
              </div>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="Check1">
          <input type="checkbox" class="form-check-input" id="Check1">
          Remember me</label>
        </div>
        </form>
        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success btn-sm">Log in</button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!--Register Modal -->

                            <div class="login">
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered" style="max-width:600px" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Registration form</h6>
                                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="form-group">
                                              <label for="InputName2">Name</label>
                                              <input type="text" class="form-control form-control-sm" id="InputName2" placeholder="Name">
                                            </div>
                            <div class="form-group">
                              <label for="InputEmail2">Email address</label>
                              <input type="email" class="form-control form-control-sm"  id="InputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <label for="InputPassword2">Password</label>
                              <input type="password" class="form-control form-control-sm" id="InputPassword2" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label for="ConfirmPassword2">Confirm Password</label>
                              <input type="password" class="form-control form-control-sm" id="ConfirmPassword2" placeholder="Password">
                            </div>
                            </form>
                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-success btn-sm">Register</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


        <!-- Footer -->
        <div class="container-fluid footer bg-dark text-center" style="padding: 1.75% 20%;">
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium consequatur blanditiis labore ad maiores excepturi nostrum perferendis, laboriosam eum sapiente molestias dignissimos quibusdam aliquam sit fugiat! Molestias deleniti impedit placeat.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h8 class="font-weight-light">Copyright 2020 | Shinigami &#169;</h8>
                </div>
            </div>
        </div>
        <!-- Footer -->

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
    </body>
</html>
