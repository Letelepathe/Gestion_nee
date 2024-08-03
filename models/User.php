<?php

 class User 
{
  protected  $ID_USERS="", $NOM, $PRENOM, $EMAIL, $MOT_PASSE, $PHOTO,$SEXE,$TEL;

  public function __construct($NOM, $PRENOM,$SEXE, $EMAIL, $MOT_PASSE, $PHOTO,$TEL) {
    include("config/BD_Connexion.php");
        $this->$NOM=$NOM;
        $this->$PRENOM=$PRENOM;
        $this->$EMAIL=$EMAIL;
        $this->$MOT_PASSE=$MOT_PASSE;
        $this->$PHOTO=$PHOTO;
        try {
            $sql = "INSERT INTO `users`(`NOM`, `PRENOM`, `SEXE`, `EMAIL`, `MOT_PASSE`, `PHOTO`, `tel`) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
            $NOM,
            $PRENOM,
            $SEXE,
            $EMAIL,
            $MOT_PASSE,
            $PHOTO,
            $TEL]
        );
        if($stmt!=0){
            $sql = "SELECT `ID_USERS` FROM `users` WHERE EMAIL=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$EMAIL]);
            $this->ID_USERS=$stmt->fetch(PDO::FETCH_ASSOC);
        }
        }  catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0;
        }
}
    public function getID_users(){
        return $this->ID_USERS['ID_USERS'];
    }

    public function getUsers($EMAIL,$MOT_PASSE){
        $sql = "SELECT `ID_USERS` FROM `users` WHERE EMAIL=? and MOT_PASSE=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$EMAIL,$MOT_PASSE]);
        $this->ID_USERS=$stmt->fetch(PDO::FETCH_ASSOC);
        return $this->ID_USERS['ID_USERS'];
    }
    
}
