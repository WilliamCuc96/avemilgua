<?php
$target_dir = "img/temp/";
$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = uniqid(). '.' . end($temp);
$target_file = $target_dir . "foto_".$newfilename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msj = "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    $msj = "Lo sentimos, el archivo ya existe";
    $uploadOk = 0;

}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    $msj = "Lo sentimos, foto demasiado grande";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $msj = "Solo se admiten archivos JPG, JPEG, PNG";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Lo sentimos, ocurrio un error.".$msj;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo $target_file;
    } else {
        echo "Lo sentimos, ocurrió un error al guardar la imagen";
    }
}
?>
