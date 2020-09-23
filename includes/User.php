<?php
class User extends Db_object
{
    protected static $db_table = "user";
    protected static $db_table_fields = array('id','username','password','first_name','last_name','email');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $email;

    public static function verify_user($user){
        global $database;
        $username = $database->escape_string($user);

        $sql = "SELECT * FROM ".self::$db_table." WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "LIMIT 1;";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function verify_email($mail){
        global $database;
        $email = $database->escape_string($mail);

        $sql = "SELECT * FROM ".self::$db_table." WHERE ";
        $sql .= "email = '{$email}' ";
        $sql .= "LIMIT 1;";

        return $the_result_array = self::find_this_query($sql);
    }

    public static function create_user($username,$pass,$fName,$lName,$mail){
        if(!empty($username) && !empty($pass) && !empty($fName) && !empty($lName) && !empty($mail)){
            global $database;
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO ".self::$db_table." (username,password,first_name,last_name,email)";
            $sql .= " VALUES ('$username','$hash','$fName','$lName','$mail');";
            $database->query($sql);
            mysqli_close();
        }
    }

    public static function update_mail($mail,$pass){
        global $database;
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "UPDATE ".self::$db_table." SET password= '{$hash}' WHERE email= '{$mail}';";
        $database->query($sql);
        mysqli_close();
        return true;
    }
}
?>