<?php
class Parents 
{
    protected $NOM_PERE, $NOM_MERE, $TUTEL,$CODE_PAR,$ADRESSE,$result;

    public function __construct(,$CODE_PAR,$NOM_PERE, $NOM_MERE, $TUTEL,$ADRESSE) {
       
            $this->ID_USERS=$stmt;
            include("config/BD_Connexion.php");
            $sql = "INSERT INTO `parents`(`CODE_PARENT`, `NOM_MERE`, `NOM_PERE`, `TUTEL`, `ADRESSE`) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $this->result=$stmt->execute([
                $CODE_PAR,
                $NOM_PERE,
                $NOM_MERE,
                $TUTEL,
                $ADRESSE
            ]);
    }
    public function Get(){
        return $this->result;
    }
    
}
