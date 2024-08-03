<?php

class MedecinControlleur  extends AppControlleur
{
    function index() {
        return Parent::render('Navigation.styles');
        #code...
    }
    
    function Show() {
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
        $lib=Requeste::request('libelle');
       $med=new Medecin(
        $nom,
        $prenom,
        $sexe,
        $email,
        $password,
        Storage::StoreFiles('photo','images'),
        $tel,  
        $special,
        $lib,
        MatriculeGen::Gen());
        $val="valeur1";
        echo $med->GET();
        return Parent::redirect('Dashboard');
     
    }
    

    
    # code...
}
