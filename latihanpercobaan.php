<?php
    function intToRoman($Bilangan){
        $hs = "";
        if($Bilangan<1||$Bilangan>3999){
            $hs = "Batas Bilangan yaitu 1 sampai 3999";
        }else{
            while($Bilangan>=1000){
                $hs .= "M";
                $Bilangan -= 1000;
            }
            if($Bilangan>=500){
                if($Bilangan>500){
                    if($Bilangan>=900){
                        $hs .= "CM";
                        $Bilangan-=900;
                    }else{
                        $hs .= "D";
                        $Bilangan-=500;
                    }
                }
            }
            while($Bilangan>=100){
                if($Bilangan>=400){
                    $hs .= "CD";
                    $Bilangan-=400;
                }else{$hs .= "C";
                    $Bilangan-=100;
                }
            }
            if($Bilangan>=50){
                if($Bilangan>=90){
                    $hs .= "XC";
                    $Bilangan-=90;
                }else{
                    $hs .= "L";
                    $Bilangan-=50;
                }
            }
            while($Bilangan>=10){
                if($Bilangan>=40){
                    $hs .= "XL";
                    $Bilangan-=40;
                }else{
                    $hs .= "X";
                    $Bilangan-=10;
                }
            }
            if($Bilangan>=5){
                if($Bilangan==9){
                    $hs .= "IX";
                    $Bilangan-=9;
                }else{
                    $hs .= "V";
                    $Bilangan-=5;
                }
            }
            while($Bilangan>=1){
                if($Bilangan==4){
                    $hs .= "IV";
                    $Bilangan-=4;
                }else{
                    $hs .= "I";
                    $Bilangan-=1;
                }
            }
        }
        return ($hs);
    }
    echo intToRoman(58);
?>