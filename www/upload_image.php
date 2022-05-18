<!DOCTYPE html>
<html>
<body>

<form action="upload_image.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
    

</body>
</html>

<?php
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], 'data/profileImage/'.basename($_FILES["fileToUpload"]["name"]));
if (isset($_POST['submit'])){
    $result = basename($_FILES["fileToUpload"]["name"]);
    echo '<img src="./data/profileImage/'.$result.'">';
}

?>