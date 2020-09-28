<?php include("includes/header.php");
    if(!$session->is_signed_in()){
        redirect('login.php');
    }
    if(empty($_GET['id'])){
        redirect('profile.php');
    }else{
        $persona = Persona::find_the_persona($_GET['id']);
        if(empty($persona)){
            redirect('profile.php');
        }else{
        if(isset($_POST['submit'])){
            Persona::delete($_GET['id']);
            redirect('profile.php');  
        }
?>

<div class="container px-5" id="body-container">
    <div class="my-5 py-5 px-5">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2 class="text-center">Are you sure you want to delete this character?</h2>
                <hr>
                <br>
                <?php foreach($persona as $value): ?>
                <div class="card" method="post">
                    <div class="card-header text-center">
                    <?php echo $value->name; ?> - <?php echo $value->class; ?>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 d-lg-block">
                            <div class="form-group">
                                <img src="<?php echo $value->image_path_and_placeholder(); ?>" class="img-responsive w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <p class="card-text"><?php echo $value->description; ?></p>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <div class="row  justify-content-end">
                        <input type="submit" name="submit" value="Yes" class="btn btn-lg btn-danger rounded-0">
                        <a href="profile.php" class="btn btn-lg btn-warning rounded-0">No</a>  
                    </div>   
                </div>
                </form>
                <?php endforeach ?>
                <br>
            </div>
        </div>
    </div>
</div>

<?php }}
include("includes/footer.php") ?>