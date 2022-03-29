<?php

$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder = 'uploads/'.$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' width=100 height =100 />";


?>
<html>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name = "uploadfile" />
        <input type="submit" name="submit" />
</form>
</body>
</html>