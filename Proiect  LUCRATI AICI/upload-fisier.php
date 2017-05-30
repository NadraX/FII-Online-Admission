<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Fisierul depaseste 5MB!";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf") {
    echo "Respectati formatul fisierelor!";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Fisierul ". basename( $_FILES["fileToUpload"]["name"]). " a fost uploadat cu succes!";
    } else {
        echo "A aparut o eroare la upload-ul fisierului!";
    }
}
?>