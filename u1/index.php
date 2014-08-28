<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $namn = "Anton";
        $efternamn = "Broberg";
        $adress = "Tallkullegatan 11";
        $siffra1 = 3;
        $siffra2 = 5;
        
        echo "<p>".$namn."<p>".$efternamn."<p>".$adress;
        
        $Fullständig = $namn." ".$efternamn." ".$adress;
        echo "<p>".$Fullständig;
        
        if($siffra1>$siffra2){
            echo "<p> "."Bra jobbat!";
        }
        else{
            echo "<p> "."Tyvärr";
        }
        
        
        
        switch ($siffra1+$siffra2){
            
            case 8:
                echo "<p> "."Svaret blev 8!";
                break;
            case 7:
                echo "<p> "."svaret blev 7!";
                break;
            default: "<p> "."bajs";
        }
        
        $foo = false;
        $oof = true;
        ?>
    </body>
</html>
