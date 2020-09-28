<?php include("includes/header.php");
    $error_message = "";
    if(!$session->is_signed_in()){
        redirect('login.php');
    }
    if(empty($_GET['id'])){
        redirect('profile.php');
    }
    $file ="";
    $persona = Persona::find_the_persona($_GET['id']);

    if(isset($_POST['submit'])){
        $file = $_FILES['image'];
        if($_FILES['image']['name']== 0){
            foreach($persona as $value){
                $user_id = $_SESSION['user_id'];
                $name = trim($_POST['name']);
                $class = $_POST['class'];
                $description = trim($_POST['description']);
                $image=$value->image; 
                $update = Persona::edit_persona($_GET['id'],$name,$class,$description,$image);
                if($update===true){
                    redirect("profile.php?update=success");
                }elseif($update===true){
                    redirect("edit-profile.php?update=failure");
                }
            }
        }else{
            $image=$_FILES['image']['name'];
            $user_id = $_SESSION['user_id'];
            $name = trim($_POST['name']);
            $class = $_POST['class'];
            $description = trim($_POST['description']);
            $imageTmpName=$_FILES['image']['tmp_name'];        
            $imageSize=$_FILES['image']['size'];
            $imageError=$_FILES['image']['error'];
            $imageType=$_FILES['image']['type'];
            $imageExt = explode('.',$image);
            $imageActualExt = strtolower(end($imageExt));
    
            $allowed = array('jpg','jpeg','png');
            if(in_array($imageActualExt,$allowed)){
               if($imageError === 0){
                if($imageSize <= 1000000){
                    $upload = Persona::upload($user_id,$image,$imageTmpName);
                    if(!empty($upload)){
                        $update = Persona::edit_persona($_GET['id'],$name,$class,$description,$image);
                        if($update===true){
                            redirect("profile.php?update=success");
                        }elseif($update===true){
                            redirect("edit-profile.php?update=failure");
                        }
                    }else{
                        $error_message = "This folder has no write permissions"; 
                    }                
                }else{
                    $error_message = "Your file is too big";
                }
               }else{
                $error_message = "There was an error uploading your file!";
               } 
            }else{
                $error_message = "You cannot upload files of this type!";
            }
        }
    }
?>

<div class="container px-5" id="body-container">
    <div class="my-5 py-5 px-5">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2 class="text-center">Edit character</h2>
                <hr>
                <br>
                <?php foreach($persona as $value): ?>
                <form class="user" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Name: </label>
                      <input type="text" name="name" value="<?php echo $value->name; ?>" class="form-control form-control-user" id="name" placeholder="<?php echo $value->name; ?>">
                    </div>
                    <div class="form-group">
                        <select id = "class" name="class">
                            <option value = "<?php echo $value->class; ?>"><?php echo $value->class; ?></option>
                            <option value = "Death Knight">Death Knight</option>
                            <option value = "Demon Hunter">Demon Hunter</option>
                            <option value = "Druid">Druid</option>
                            <option value = "Hunter">Hunter</option>
                            <option value = "Mage">Mage</option>
                            <option value = "Monk">Monk</option>
                            <option value = "Paladin">Paladin</option>
                            <option value = "Priest">Priest</option>
                            <option value = "Rogue">Rogue</option>
                            <option value = "Shaman">Shaman</option>
                            <option value = "Warlock">Warlock</option>
                            <option value = "Warrior">Warrior</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="5" placeholder="<?php echo $value->description; ?>"><?php echo $value->description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
                    <h5 class="text-red"><?php echo $error_message; ?></h5>
                  </form>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>