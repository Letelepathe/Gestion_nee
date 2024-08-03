<?php

class DashboardControlleur  extends AppControlleur
{
    function Index() {
        echo 'ekoti awa';
        return Parent::render('Dashboard');
        #code...
    }
    
    function Show() {
        echo 'ekoti awa';
        $val="cochon";
        return Parent::render('accounts',Compact('val'));
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
       $med=new Enfants(
        $nom,
        $prenom,
        $sexe,
        $email,
        $password,
        "photo1",
        $tel,  
        $special,
        "specialiste depuis 19ans",
        '$ACk1');
        $val="valeur1";
        echo $med->GET();
        return Parent::render('DashboardControlleur');
     
    }
    

    
    # code...
}
