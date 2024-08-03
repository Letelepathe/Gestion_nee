<?php

class Storage{

    static function StoreFiles($imagePost,$filePath)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupération des informations sur le fichier
            $target_dir = 'public/'.$filePath.'/'; // Dossier de destination
            $target_file = $target_dir . basename($_FILES[$imagePost]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Vérification du type de fichier
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES[$imagePost]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "Le fichier n'est pas une image.";
                    $uploadOk = 0;
                }
            }
        
            // Vérification de la taille du fichier
            if ($_FILES[$imagePost]["size"] > 500000) { // 500 Ko
                echo "Le fichier est trop gros.";
                $uploadOk = 0;
            }
        
            // Vérification du format de fichier
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Désolé, seuls les fichiers JPG, PNG, JPEG et GIF sont autorisés.";
                $uploadOk = 0;
            }
        
            // Vérification si le fichier existe déjà
            if (file_exists($target_file)) {
                echo "Désolé, le fichier existe déjà.";
                $uploadOk = 0;
            }
        
            // Vérification des erreurs
            if ($uploadOk == 0) {
                echo "Désolé, votre fichier n'a pas été téléchargé.";
            } else {
                if (move_uploaded_file($_FILES[$imagePost]["tmp_name"], $target_file)) {
                    echo "Le fichier ". basename($_FILES[$imagePost]["name"]) . " a été téléchargé avec succès.";
                    return $target_file;
                } else {
                    echo "Erreur lors du téléchargement du fichier.";
                }
            }
        }
    }
}
// Vérification si le formulaire a été soumis

?>
