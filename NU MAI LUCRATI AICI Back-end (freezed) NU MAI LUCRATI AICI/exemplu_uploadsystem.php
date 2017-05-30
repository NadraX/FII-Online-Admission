<?php
$target_dir = "../../upload/";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Verificare dimensiuni
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Permite anumite formate
if($imageFileType != "pdf"  ) {
    echo "Sorry, fisierul trebuie sa fie pdf.";
    $uploadOk = 0;
}
// Verificare daca a fost vreo eroare pana acum
if ($uploadOk == 0) {
    echo "Fisierul nu a fost uploadat.";
} else {
    $new_name = "asta_trebuie_modificat_cu_numele_final_al_documentului" . "." . $imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$new_name)) {
        echo "Fisierul ". basename( $_FILES["fileToUpload"]["name"]). " a fost uploadat.";
    } else {
        echo "Ne pare rau, a aparut o eroare la upload-ul fisierului.";
    }
}
?>
