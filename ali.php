<?php
session_start();
$y=$_SESSION['location'];
$z="userdata/".$y."/images";
$dir_open = opendir($z);

while(false !== ($filename = readdir($dir_open))){
    if($filename != "." && $filename != ".."){
        $link = "<a href='$z/$filename'> $filename </a><br />";
        echo $link;
    }
}

closedir($dir_open);
$b="<a href='image.php'>back</a>";
echo $b;
?>