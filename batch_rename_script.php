<?php

if ($handle = opendir('C:\xampp\htdocs\GH-client')) {
    while (false !== ($fileName = readdir($handle))) {
        $newName = str_replace(".xml",".php",$fileName);
        rename($fileName, $newName);
    }
    closedir($handle);
}

?>