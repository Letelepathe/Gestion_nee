<?php
class Infirmier 
{
    protected $NOM, $PRENOM, $EMAIL, $SEXE, $MOT_PASSE, $PHOTO,$SPECIALITE,$LIBELLE,$result;
    
    public function __construct($NOM, $PRENOM,$SEXE, $EMAIL, $MOT_PASSE, $PHOTO,$TEL,$CODE_INF,$LIBELLE) {
        $user=new User($NOM, $PRENOM,$SEXE, $EMAIL, $MOT_PASSE, $PHOTO,$TEL);
        $stmt=$user->getID_users();
        echo $stmt;
        if($stmt!=0)
        {
            $this->ID_USERS=$stmt;
            include("config/BD_Connexion.php");
            $sql = "INSERT INTO `infirmiere`(`CODE_INF`, `ID_USERS`, `LIBELLE`) VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
            $this->result=$stmt->execute([
                $CODE_INF,
                $this->ID_USERS,
                $LIBELLE
            ]);
           
        }
    }
    public function Get(){
        return $this->result;
    }
    
}
