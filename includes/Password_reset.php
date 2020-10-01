<?php
class Password_reset extends Db_object
{
    protected static $db_table = "password_reset";
    protected static $db_table_fields = array('pwdResetEmail','pwdResetSelector','pwdResetToken','pwdResetExpires');
    public $pwdResetId;
    public $pwdResetEmail;
    public $pwdResetSelector;
    public $pwdResetToken;
    public $pwdResetExpires;

    public static function send_mail($userEmail){
        global $database;
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);
        $url = "http://www.mvlwebdevelopment.be/reset-password.php?selector=".$selector."&validator=".bin2hex($token);
        $expires = date("U") + 1800;

        $sql = "DELETE FROM ".self::$db_table." WHERE pwdResetEmail= '{$userEmail}';";
        $database->query($sql);

        $hashedtoken = password_hash($token, PASSWORD_DEFAULT);

        $sql = "INSERT INTO ".self::$db_table."(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES ('{$userEmail}','{$selector}','{$hashedtoken}','{$expires}');";
        $database->query($sql);

        $email_to = $userEmail;

        $subject = "Password Recovery";

        $output='<p>Dear user,</p>';
        $output.='<p>Please click on the following link to reset your password.</p>';
        $output.='<p>-------------------------------------------------------------</p>';
        $output.='<p><a href="'.$url.'">
        '.$url.'</a></p>'; 
        $output.='<p>-------------------------------------------------------------</p>';
        $output.='<p>Please be sure to copy the entire link into your browser.
        The link will expire after 1 day for security reason.</p>';
        $output.='<p>If you did not request this forgotten password email, no action 
        is needed, your password will not be reset. However, you may want to log into 
        your account and change your security password as someone may have guessed it.</p>';   
        $output.='<p>Thanks</p>';
        $body = $output; 

        $headers = "From: mvanlaer <michaelvllogin@gmail.com>\r\n";
        $headers .= "Reply-To: michaelvllogin@gmail.com\r\n";
        $headers .= "Content-Type: text/html\r\n";

        mail($email_to, $subject, $body, $headers);

        header("Location: ./forgot-password.php?reset=success");
    }

    public static function find_mail($selector){
        global $database;
        $currentDate = date("U");
        $sql = "SELECT * FROM ".self::$db_table." WHERE pwdResetSelector = '{$selector}' AND pwdResetExpires >= '".$currentDate."';";
        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

}