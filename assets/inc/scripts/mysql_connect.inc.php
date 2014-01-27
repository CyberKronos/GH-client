<?php
//This is the address that will appear coming from ( Sender )
define('EMAIL', 'gamehub@gmail.com');

/*Define the root url where the script will be found such as
http://website.com or http://website.com/Folder/ */
DEFINE('WEBSITE_URL', 'http://localhost/test');

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("socialnetwork");
?>