<?php
$path = ".";
    $filelist = array();

    if($handle = opendir($path)){
        while($entry = readdir($handle)){
            echo $entry."<br>";
        }
      
        closedir($handle);
    }
?>
