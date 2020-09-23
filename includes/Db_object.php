<?php
class Db_object
{
    public $errors = array();
    public $upload_errors_array = array(
        UPLOAD_ERR_OK =>"There is no error",
        UPLOAD_ERR_INI_SIZE =>"The upload file exceeds the upload max_filesize from php.ini",
        UPLOAD_ERR_FORM_SIZE =>"The upload file exceeds MAX_FILE_SIZE in php.ini for html form",
        UPLOAD_ERR_NO_FILE =>"No file uploaded",
        UPLOAD_ERR_PARTIAL =>"The file was partially uploaded",
        UPLOAD_ERR_NO_TMP_DIR =>"Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE =>"Failed to write to disk",
        UPLOAD_ERR_EXTENSION =>"A php extension stopped your upload"
    );

    public static function instantie($result){
        $calling_class = get_called_class(); //late static binding
        $the_object = new $calling_class;
        foreach($result as $the_attribute=>$value){
            if($the_object->has_the_attribute($the_attribute)){
                 $the_object->$the_attribute=$value;
            }
        }
        return $the_object;
    }

    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute,$object_properties);
    }

    public static function find_this_query($sql){
        global $database;
        $result = $database->query($sql);
        $the_object_array=array();
        while($row=mysqli_fetch_array($result)){
            $the_object_array[]=static::instantie($row);
        }
        return $the_object_array;
    }

    public static function find_all(){
        return static::find_this_query("SELECT * FROM ".static::$db_table.";");
    }
}