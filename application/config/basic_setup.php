<?php
$weburl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$weburl .= "://".$_SERVER['HTTP_HOST'];
$weburl .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
define('WEB_URL',$weburl.'index.php');//IF You are Using Virtual Hoast you can remove index.php
define('WEB_PATH',$weburl.'theme/');
$rootPath = (isset($_SERVER['DOCUMENT_ROOT']))?$_SERVER['DOCUMENT_ROOT']:'/var/www/html/src-new';
define('FILE_UPLOAD_PATH',$rootPath.'/src-new/uploads/');
define('WEB_IMG_PATH',$weburl.'uploads/');
define('DB_HOSTNAME','localhost');//192.168.1.29 'localhost'
define('DB_USERNAME','root');//
define('DB_PASSWORD','Abhi@12345');//password root
define('DB_DATABASE','exam'); //realcube_test_db oa
?>
