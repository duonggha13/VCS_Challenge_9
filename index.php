<!DOCTYPE html>
<html>
<body>
<form action="./Page/upload.php" method="post" enctype="multipart/form-data">
  Select image:
  <input type="file" id="fileToUpload" name="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<a href='./Page/about.php'>About</a>
<?php
  if(isset($_GET['file'])){
    $file = $_GET['file'];
    include $file;
  }
?>
</body>
</html>