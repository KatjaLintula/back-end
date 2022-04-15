<h3> Ladda upp bilder! </h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    Ladda upp profilbild:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Ladda upp!" name="submit">
</form>

<h3>Dina bilder:</h3>

<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Filen är - " . $check["mime"] . "<br>";
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Bilden var för stor<br>";
  $uploadOk = 0;
}

if(!empty($_FILES["fileToUpload"]["name"]) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Endast jpg och png bilder accepteras<br>";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Det gick något fel! Din fil blev inte uppladdad<br>";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Filen ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " blev uppladdad!.<br>";
  } elseif (!empty($_FILES["fileToUpload"]["name"])) {
    echo "Det gick något fel! Din fil blev inte uppladdad<br>";
  }
}
  $imagearray = scandir($target_dir,1);

  foreach($imagearray as $x => $image) {
    $x = $image;
    echo '<img src="uploads/'.$image.'">';
  }
?>

