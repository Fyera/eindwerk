<?php
defined('DS')?null:define('DS',DIRECTORY_SEPARATOR);
define('SITE_ROOT','.');
defined('INCLUDES_PATH')?null:define('INCLUDES_PATH',SITE_ROOT.DS.'includes');
defined('IMAGES_PATH')?null:define('IMAGES_PATH',SITE_ROOT.DS.'img');

require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."config.php");
require_once(INCLUDES_PATH.DS."Database.php");
require_once(INCLUDES_PATH.DS."Db_object.php");
require_once(INCLUDES_PATH.DS."User.php");
require_once(INCLUDES_PATH.DS."Persona.php");
require_once(INCLUDES_PATH.DS."Password_reset.php");
require_once(INCLUDES_PATH.DS."Session.php");
?>