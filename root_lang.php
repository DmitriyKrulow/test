<?php
$path = ".";
    $filelist = array();

    if($handle = opendir($path)){
        while($entry = readdir($handle)){
            echo $entry."<br>";
        }
      
        closedir($handle);
    }
$homepage = file_get_contents('fr_lang.php');
echo $homepage;
?>
