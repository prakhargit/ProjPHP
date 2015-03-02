<?php
session_start();
$y=$_SESSION['location'];
$z="userdata/".$y."/docs";
$dir_open = opendir($z);

while(false !== ($filename = readdir($dir_open))){
    if($filename != "." && $filename != ".."){
        $link = "<a href='$z/$filename'> $filename </a><br />";
        echo $link;
    }
}

closedir($dir_open);

$home="<a href='documents.php'>back</a>";
echo $home;
?>