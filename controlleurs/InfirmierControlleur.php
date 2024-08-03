<?php

class InfirmierControlleur 
{
    
    function Show() : void {
        #code...
    }
   public function Create() {
        echo Requeste::request('nom');
        $nom=Requeste::request('nom');
        $prenom=Requeste::request('prenom');
        $tel=Requeste::request('tel');
        $password=Requeste::request('password');
        $poste=Requeste::request('postes');
        $special=Requeste::request('special');
        $sexe=Requeste::request('sexe');
        $email=Requeste::request('email');
       $med=new Infirmier(
        $nom,
        $prenom,
        $sexe,
        $email,
        $password,
        "photo1",
        $tel,
        "12QSEES",
        );
       echo $med->GET();
    }
    function Index() : void {
        
    }

    
    # code...
}
$med=new MedecinControlleur();
$med->Create();
