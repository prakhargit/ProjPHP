<?php
session_start();
$y=$_SESSION['location'];
$z="userdata/".$y."/vids";
$dir_open = opendir($z);

while(false !== ($filename = readdir($dir_open))){
    if($filename != "." && $filename != ".."){
        $link = "<a href='$z/$filename'> $filename </a><br />";
        echo $link;
    }
}

closedir($dir_open);
$o="<a href='videos.php'>back</a>";
echo $o;

?>