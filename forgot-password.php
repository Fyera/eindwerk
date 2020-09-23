<?php include("includes/header.php");

  $error_message = "";
  if(isset($_POST["reset-request-submit"]) && (!empty($_POST["email"]))){
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email) {
      $error_message ="<p>Invalid email address please type a valid email address!</p>";
    }else{
      $email_found = User::verify_email($email);
      var_dump($error_message);
      if (!$email_found){
        $error_message = "<p>No user is registered with this email address!</p>";
      }elseif(!$error_message){
        Password_reset::send_mail($email);
      }
    }
  }
?>

<div class="container px-5">
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 card-custom shadow-lg my-5">
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
            <img class="img-fluid w-100" src="./img/hordevsalliance.png" alt="hordevsalliance">
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Forgot Your Password?</h1>
              </div>
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <button type="submit" name="reset-request-submit" class="btn btn-primary">Reset Password!</button>
              </form>
              <h5 class="text-red"><?php echo $error_message; ?></h5>
              <?php
              if(isset($_GET["reset"])){
                if($_GET["reset"]=="success"){
                  echo "<p>Check your e-mail!</p>";
                }elseif($_GET["reset"]=="timeout"){
                  echo "<p class='text-red'>You need to re-submit your reset request.</p>";
                }
              }?>
              <hr>
              <div class="text-center">
                <a class="small" href="register.php">Create an Account!</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("includes/footer.php") ?>