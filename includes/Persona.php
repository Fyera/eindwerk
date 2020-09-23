<?php
class Persona extends Db_object
{
    protected static $db_table = "persona";
    protected static $db_table_fields = array('id', 'user_id', 'name', 'class','description', 'image');
    public $id;
    public $user_id;
    public $name;
    public $class;
    public $description;
    public $image;
    public $upload_directory = 'img'.DS.'profile';
    public $image_placeholder = 'http://place-hold.it/400x400&text=image';

    public static function create_persona($user_id, $name, $class, $description, $image){
        if(!empty($user_id) && !empty($name) && !empty($class) && !empty($description)){
            $persona = new persona();
            $persona->user_id = (int)$user_id;
            $persona->name = $name;
            $persona->class = $class;
            $persona->description = $description;
            $persona->image = $image;

            return $persona;
        }else{
            return false;
        }
    }

    public static function find_the_persona($user_id){
        global $database;
        $sql = "SELECT * FROM ".self::$db_table;
        $sql .= " WHERE user_id=".$database->escape_string($user_id);
        $sql .= " ORDER BY id ASC;";

        return self::find_this_query($sql);
    }

    public function image_path_and_placeholder(){
        return empty($this->image) ? $this->image_placeholder : $this->upload_directory.DS.$this->user_id.DS.$this->image;
    }

    public function set_file($file){
        if(empty($file) || !$file || !is_array($file)){
            $this->errors[] = "No file uploaded!";
            return false;
        }elseif($file['error'] != 0){
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        }else{
            $this->persona_image = basename($file['name']);
            $this->tmp_path = $file['tmp_name'];
            $this->type = $file['type'];
            $this->size = $file['size'];
        }
    }

    public function save_persona_and_image(){
        $target_path = SITE_ROOT.DS.$this->upload_directory.DS.$this->user_id.DS.$this->image;

        if(!empty($this->errors)){
            return false;
        }
        if(empty($this->persona_image)||empty($this->tmp_path)){
            $this->errors[] = "File not available";
            return false;
        }
        if(file_exists($target_path)){
            $this->errors[] = "File {$this->persona_image} exists";
            var_dump();
        }
        if(move_uploaded_file($this->tmp_path, $target_path)){
            if($this->create()){
                unset($this->tmp_path);
                return true;
            }else{
                $this->errors[] = "This folder has no write permissions";
                return false;
            }
        }
    }
}
?>