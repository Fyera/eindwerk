<?php include("includes/header.php");
$selector = $_GET["selector"];
$validator = $_GET["validator"];

if(empty($selector) || empty($validator)){
    redirect("login.php?reset=failure");
}else{
    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
        if(isset($_POST["reset-password-submit"])){
            $selector = $_POST["selector"];
            $validator = $_POST["validator"];
            $password = $_POST["pass1"];
            $passwordRepeat = $_POST["pass2"];

            if(empty($password) || empty($passwordRepeat)){
                header("Location: reset-password.php?selector=".$selector."&validator=".$validator."&reset=empty");
                exit();
            }else if($password != $passwordRepeat){
                header("Location: reset-password.php?selector=".$selector."&validator=".$validator."&reset=pwdnotsame");
                exit();
            }else{
                $pwdReset = Password_reset::find_mail($selector);

                if(!$pwdReset){
                    header("Location: forgot-password.php?reset=timeout");
                }else{
                    $tokenBin = hex2bin($validator);
                    $row = get_object_vars($pwdReset);
                    $tokenCheck = password_verify($tokenBin,$row["pwdResetToken"]);
                    // var_dump($tokenCheck);

                    if($tokenCheck == false){
                        header("Location: forgot-password.php?reset=timeout");
                    }elseif($tokenCheck == true){
                        $tokenEmail = $row["pwdResetEmail"];

                        $updateUser = User::update_mail($tokenEmail,$password);
                        if($updateUser == true){
                            header("Location: login.php?reset=success");
                        }else{
                            header("Location: reset-password.php?selector=".$selector."&validator=".$validator."&reset=error");
                        }
                    }
                }
            }

          
        }
    }else{

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
                <h1 class="h4 text-gray-900 mb-4">Reset Your Password?</h1>
              </div>
              <form method="post">
                <input type="hidden" name="selector" value="<?php echo $selector ?>" />
                <input type="hidden" name="validator" value="<?php echo $validator ?>" />
                <br /><br />
                <label><strong>Enter New Password:</strong></label><br />
                <input type="password" name="pass1" placeholder="Enter a new password..." required />
                <br /><br />
                <label><strong>Re-Enter New Password:</strong></label><br />
                <input type="password" name="pass2" placeholder="Repeat new password..." required/>
                <br /><br />
                <input type="submit" name="reset-password-submit" value="Reset Password" class="btn btn-primary" />
                <?php
                if(isset($_GET["reset"])){
                  if($_GET["reset"]=="empty"){
                    echo "<p class='text-red'>Please fill in your password both times.</p>";
                  }elseif($_GET["reset"]=="pwdnotsame"){
                    echo "<p class='text-red'>Your passwords don't match!</p>";
                  }elseif($_GET["reset"]=="error"){
                    echo "<p class='text-red'>Something went wrong. Please try again.</p>";
                  }
                }
                ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("includes/footer.php") ?>