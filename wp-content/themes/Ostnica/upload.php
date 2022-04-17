<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $check_file_type_msg="File is an image - " . $check["mime"] . ".";
    _e($check_file_type_msg);
    $uploadOk = 1;
  } else {
    _e("File is not an image");
    $uploadOk = 0;
  }
}
?>
