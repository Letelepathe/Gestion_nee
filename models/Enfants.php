<?php
class Enfants 
{
    protected $NOM, $PRENOM, $EMAIL, $SEXE, $TAILLE, $POIDS, $GRP_SANG, $DATE_NAIS, $LIEU, $TYPE_NAIS,$result;

    public function __construct($CODE_ENF,$CODE_PARENT, $CODE_INF, $NOM, $PRENOM, $EMAIL, $SEXE,  $TAILLE, $POIDS, $GRP_SANG, $DATE_NAIS, $LIEU, $TYPE_NAIS) {
       
            include("config/BD_Connexion.php");
            $sql = "INSERT INTO `enfants`(`CODE_ENF`, `CODE_PARENT`, `CODE_INF`, `NOM`, `PRENOM`, `SEXE`, `TAILLE`, `POIDS`, `GRP_SANG`, `DATE_NAIS`, `LIEU`, `TYPE_NAIS`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $this->result=$stmt->execute([
                $CODE_ENF,
                $CODE_PARENT,
                $CODE_INF,
                $NOM,
                $PRENOM,
                $EMAIL,
                $SEXE,
                $TAILLE,
                $POIDS,
                $GRP_SANG,
                $DATE_NAIS,
                $LIEU,
                $TYPE_NAIS
            ]);
    }
    public function Get(){
        return $this->result;
    }
    
}
