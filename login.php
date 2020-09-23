<?php include("includes/header.php");
  require_once('includes/database.php');
  $currentDate = date("U");
  $error_message = "";
  if($session->is_signed_in()){
    redirect("index.php");
  }

  if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user_found = User::verify_user($username);
    if(!$user_found){
      $error_message = "Your username is incorrect";
    }else{
      $row = get_object_vars($user_found);
      $password_hash = $row['password'];
      if(password_verify($password,$password_hash)){
        $session->login($user_found);
        redirect("index.php");
      }else{
        $error_message = "Your password is incorrect";
      }
    }
  }else{
    $username = "";
    $password = "";
  }
?>

<div class="container px-5">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 card-custom shadow-lg my-5">

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img class="img-fluid w-100" src="./img/hordevsalliance.png" alt="hordevsalliance"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="form-group">
                      <label for="username">Username: </label>
                      <input type="text" name="username" value="<?php echo htmlentities($username) ?>" class="form-control form-control-user" id="exampleInputUser" aria-describedby="emailHelp" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <label for="password">Password: </label>
                      <input type="password" name="password" value="<?php echo htmlentities($password) ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Aanmelden" class="btn btn-primary">
                    </div>
                    <h5 class="text-red"><?php echo $error_message; ?></h5>
                    <?php
                    if(isset($_GET["create"])){
                      if($_GET["create"]=="success"){
                        echo "<p>You've created your new account! You can now log in.</p>";
                      }
                    }
                    if(isset($_GET['reset'])){
                      if($_GET['reset']=="failure"){
                        echo "<p class='text-red'>Could not validate your request!</p>";
                      }elseif($_GET["reset"]=="success"){
                        echo "<p>Your password has been updated!</p>";
                      }
                    }
                    ?>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create a new Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php include("includes/footer.php") ?>