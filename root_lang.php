<?php
$path = ".";
    $filelist = array();

    if($handle = opendir($path)){
        while($entry = readdir($handle)){
            echo $entry."<br>";
        }
      
        closedir($handle);
    }
echo "_______________________";
$homepage = file_get_contents('en_lang.php');
echo $homepage;
?>
