<?php include("includes/header.php");
    if(!$session->is_signed_in()){
        redirect('login.php');
    }
    $personas="";
    $user_id=$_SESSION['user_id'];
    $personas = Persona::find_the_personas($user_id);

    if(empty($personas)){
        redirect('create_persona.php');
    }
?>

<div class="container px-5" id="body-container">
    <div class="py-4 px-5">
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
                        <div class="col-lg-6">
                            <img src="<?php echo $persona->image_path_and_placeholder(); ?>" class="img-responsive w-100" alt="">
                        </div>
                        <div class="col-lg-6">
                            <p class="card-text"><?php echo $persona->description; ?></p>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <div class="row  justify-content-end">
                        <a href="edit_persona.php?id=<?php echo $persona->id; ?>" class="btn btn-success rounded-0" data-toggle="modal" data-target="#share<?php echo $persona->id; ?>"><i class="fas fa-external-link-alt"></i></a>
                        <a href="edit_persona.php?id=<?php echo $persona->id; ?>" class="btn btn-warning rounded-0"><i class="fas fa-edit"></i></a>
                        <a href="delete_persona.php?id=<?php echo $persona->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a>
                    </div>   
                </div>
            </div>
            <!-- Modal -->
            <div id="share<?php echo $persona->id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Link: </p>
                        <p id="sharedLink<?php echo $persona->id; ?>">http://localhost/php/eindwerk/persona.php?id=<?php echo $persona->id; ?>&link=<?php echo $persona->link; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary round-0 btn-lg" onclick="copyToClipboard('#sharedLink<?php echo $persona->id; ?>')">Copy text</button>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <?php endforeach ?>
            <div class="row justify-content-end">
                <a href="create_persona.php" class="btn btn-primary rounded-0" value="Create a new character">Create a new character! <i class="fas fa-plus-square"></i></a>
            </div>
        </div>
    </div>
    </div>
</div>


<?php 
include("includes/footer.php") ?>