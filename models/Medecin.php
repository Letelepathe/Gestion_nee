<?php
include('models/User.php');
class Medecin extends User
{
    protected $NOM, $PRENOM, $EMAIL, $SEXE, $MOT_PASSE, $PHOTO,$SPECIALITE,$LIBELLE,$result;

    public function __construct($NOM, $PRENOM,$SEXE, $EMAIL, $MOT_PASSE, $PHOTO,$TEL,$SPECIALITE,$LIBELLE,$CODE_MED) {
        Parent::__construct($NOM, $PRENOM,$SEXE, $EMAIL, $MOT_PASSE, $PHOTO,$TEL);
        $stmt=Parent::getID_users();
        echo $stmt;
        if($stmt!=0)
        {
            $this->ID_USERS=$stmt;
            include("config/BD_Connexion.php");
            $sql = "INSERT INTO `medecin`(`CODE_MED`, `ID_USERS`, `SPECIALITE`, `LIBELLE`) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $this->result=$stmt->execute([
                $CODE_MED,
                $this->ID_USERS,
                $SPECIALITE,
                $LIBELLE
            ]);
           
        }
    }
    public function Get(){
        return $this->result;
    }
    
}
