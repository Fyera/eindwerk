<?php include("includes/header.php");
    if(!$session->is_signed_in()){
        redirect('login.php');
    }
    $user_id=$_SESSION['user_id'];
    $personas = Persona::find_all($user_id);

    // if($personas=""){
    //     redirect('create_persona.php');
    // }    var_dump($personas);

?>

<div class="container px-5" id="body-container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <h2 class="text-center">Characters</h2>
            <hr>
            <br>
            <?php foreach($personas as $persona): ?>
            <div class="card">
                <div class="card-header text-center">
                <?php echo $persona->name; ?> - <?php echo $persona->class; ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 d-lg-block">
                            <img src="<?php echo $persona->image_path_and_placeholder(); ?>" class="img-responsive w-100" alt="">
                        </div>
                        <div class="col-lg-6">
                                <p class="card-text"><?php echo $persona->description; ?></p>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <div class="row  justify-content-end">
                    <div class="col-lg-6"></div>
                        <a href="edit_persona.php?id=<?php echo $persona->id; ?>" class="btn btn-warning rounded-0"><i class="fas fa-edit"></i></a>
                        <a href="delete_persona.php?id=<?php echo $persona->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a>
                    </div>   
                </div>
            </div>
            <br>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php 
include("includes/footer.php") ?>