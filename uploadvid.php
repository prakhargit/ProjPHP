<html><head><title>File Uploads</title></head>
<body bgcolor="#33ff33">
<font face="verdana" size="+1">
<?php
session_start();
$var=$_SESSION['location'];
echo "The uploaded file is: ", $_FILES['picture_file']
['tmp_name'], "<br />";
$filename=$_FILES['picture_file']['name'];
$filesize=$_FILES['picture_file']['size'];
$directory='userdata/'.$var.'/vids/';
 $uploadFile = $directory . $filename;
echo "The moved file is: $uploadFile<br />";
 if (move_uploaded_file($_FILES['picture_file']['tmp_name'],$uploadFile)){
echo "The file is valid and was successfully uploaded.
<br /> ";
echo "The image file, $filename, is $filesize bytes.<br/>";
}
header('refresh:3,url=videos.php');
?>

</font>
</body>
</html>