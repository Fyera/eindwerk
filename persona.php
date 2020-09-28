<?php include("includes/header.php");
    $personas="";
    $personas = Persona::find_the_persona($_GET['id']);

    foreach($personas as $persona){
        if($persona->link !== $_GET['link']){
            redirect('index.php');
        }else{
    }
?>

<div class="container px-5" id="body-container">
    <div class="my-5 py-5 px-5">
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
            </div>
            <br>
            <?php endforeach ?>
        </div>
    </div>
    </div>
</div>


<?php }
include("includes/footer.php") ?>