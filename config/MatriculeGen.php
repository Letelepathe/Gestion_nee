<?php

class MatriculeGen{
    private $alpha="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    private $num="0123456789";

    static function Gen(){
        $alph=str_split($alpha);
        $numa=str_split($num);
        $code="";

        for ($i=0; $i < count($alph)-20; $i++) { 
            # code...
            $code.=$alpha[rand(0,count($alph)-1)];
        }
        for ($i=0; $i < count($numa)-8; $i++) { 
            # code...
            $code.=$numa[rand(0,count($alph)-1)];
        }

        return $code;
    }
}
