<?php
class Persona extends Db_object
{
    protected static $db_table = "persona";
    protected static $db_table_fields = array('id', 'user_id', 'name', 'class','description', 'image','link');
    public $id;
    public $user_id;
    public $name;
    public $class;
    public $description;
    public $image;
    public $link;
    public $upload_directory = 'img'.DS.'profile';
    public $image_placeholder = 'http://place-hold.it/400x400&text=image';
    public $type;
    public $size;
    public $tmp_path;

    public static function find_the_personas($user_id){
        global $database;
        $sql = "SELECT * FROM ".self::$db_table;
        $sql .= " WHERE user_id=".$database->escape_string($user_id);
        $sql .= " ORDER BY id ASC;";

        return self::find_this_query($sql);
    }

    public function find_the_persona($id){
        global $database;
        $sql = "SELECT * FROM ".self::$db_table;
        $sql .= " WHERE id=$id LIMIT 1;";

        return self::find_this_query($sql);
    }

    public function edit_persona($id,$name,$class,$description,$image){
        global $database;

        $sql = "UPDATE ".static::$db_table." SET ";
        $sql .= "name= '$name', ";
        $sql .= "class= '$class', ";
        $sql .= "description= '".$database->escape_string($description)."', ";
        $sql .= "image= '$image' ";
        $sql .= " WHERE id= $id;";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    public function delete($id){
        global $database;

        $sql = "DELETE FROM ".static::$db_table;
        $sql .= " WHERE id = $id LIMIT 1;";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    public function create($user_id,$name,$class,$description,$image,$link){
        global $database;
        
        $sql = "INSERT INTO ".static::$db_table."(user_id,name,class,description,image,link) VALUES (";
        $sql .= "'$user_id', ";
        $sql .= "'$name', ";
        $sql .= "'$class', ";
        $sql .= "'".$database->escape_string($description)."', ";
        $sql .= "'$image', ";
        $sql .= "'$link');";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    public function upload($user_id,$image,$imageTmpName){
        $upload_directory = 'img'.DS.'profile';
        $target_path = SITE_ROOT.DS.$upload_directory.DS.$user_id.DS.$image;
        if(move_uploaded_file($imageTmpName,$target_path)){
            return true;
        };
    }

    public function image_path_and_placeholder(){
        return empty($this->image) ? $this->image_placeholder : $this->upload_directory.DS.$this->user_id.DS.$this->image;
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
?>