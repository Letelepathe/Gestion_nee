<?php
include('models/Medecin.php');
include('models/Infirmier.php');
include('config/Requetes.php');
include('config/Controlleur.php');
include('config/AppControlleur.php');
include('config/Router.php');
include('config/MatriculeGen.php');
include('config/Storage_uploded.php');
include('controlleurs/MedecinControlleur.php');
include('controlleurs/EnfantControlleur.php');
include('controlleurs/DashboardControlleur.php');

include('controlleurs/AuthControlleur.php');


 if(isset($_GET['url']) || $_SERVER['REQUEST_METHOD']==='GET' ||$_SERVER['REQUEST_METHOD']==='POST' )
    {
        if(!empty($_GET['url'])){
            $url=$_GET['url'];
            if( $url=='accounts')
            {
                $met=new MedecinControlleur();
                $met->Show();
                // CreateAccount
            }else if ($url=='add_enfants'){
                $met=new EnfantControlleur();
                $met->Index();
            }else if ($url=='CreateAccount'){
                $met=new MedecinControlleur();
                $met->Create();
            }
            else if ($url=='Dashboard'){
                $met=new DashboardControlleur();
                $met->Index();
            }  
            else if ($url=='login'){
                $met=new AuthControlleur();
                $met->Auth();
            } 
        }else{
            $met=new AuthControlleur();
            $met->Auth();
        }
        
    }
 