<?php include("includes/header.php");
  require_once('includes/database.php');
  $the_message = "";
  if($session->is_signed_in()){
    redirect("index.php");
  }

  if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $fName = trim($_POST['firstName']);
    $lName = trim($_POST['lastName']);
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if(!$username){
        $the_message ="<p>Please fill in a username.</p>";
    }elseif(!$password){
        $the_message ="<p>Please fill in a password.</p>";
    }elseif(!$fName){
        $the_message ="<p>Please fill in a first name.</p>";
    }elseif(!$lName){
        $the_message ="<p>Please fill in a last name.</p>";
    }elseif(!$email){
        $the_message ="<p>Invalid email address please type a valid email address!</p>";
    }else{
        $email_found = User::verify_email($email);
        if($email_found){
            $the_message ="<p>This email address is already registered!</p>"; 
        }else{
            $user_found = User::verify_user($username);
            if($user_found){
                $the_message ="<p>Username is already in use! Pleases chose another one.</p>"; 
            }else{
                $create_user = User::create_user($username,$password,$fName,$lName,$email);
            }
        }
    }
    if(!$the_message){
    redirect("login.php?create=success");
    }
  }else{
    $username = "";
    $password = "";
    $fName = "";
    $lName = "";
    $email = "";
  }
?>

<div class="container px-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 card-custom shadow-lg my-5">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img class="img-fluid w-100"src="./img/hordevsalliance.png" alt="hordevsalliance"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create a new Account</h1>
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
                      <label for="firstName">First Name: </label>
                      <input type="text" name="firstName" value="<?php echo htmlentities($fName) ?>" class="form-control form-control-user" id="exampleInputFirstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="lastName">Last Name: </label>
                      <input type="text" name="lastName" value="<?php echo htmlentities($lName) ?>" class="form-control form-control-user" id="exampleInputLastName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="email">E-mail: </label>
                      <input type="email" name="email" value="<?php echo htmlentities($email) ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Create Account" class="btn btn-primary">
                    </div>
                    <h5 class="text-red"><?php echo $the_message; ?></h5>
                  </form>
                  <hr>
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