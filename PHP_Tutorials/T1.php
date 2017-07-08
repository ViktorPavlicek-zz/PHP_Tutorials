<?php
   print "Hello "; # 2 načina ispisivanja
   echo "World!";
?>
<br>
<?php # nizovi
    $string = "Univerzitet Singidunum";
    
    
    $niz = [1 ,2, 33, 44, 10, 45, -120, 2, 8];
    
    echo $string[1]; # 0 je prvi karakter u string-u! tj. (U-0,n-1,i-2...)
    echo $niz[2]; # 0 je prvi karkter u niz-u tj. (1-0, 2-1, 33-2...) 

echo "<br>"; # jedan ispod drugog

    echo strlen($string); # ukupna duzina stringa 

echo "<br>";   
    
    echo count($niz); # ukupan broj elemenata
    
echo "<br>";    

    $niz2 = explode(" ", $string); # razdvojili string u 2 elementa 1-Univerzitet 2-Singidunum
    echo count(@niz2);

echo "<br>";  
   
    echo $niz2[1]; # nako rabijanja na 2 elementa prikazacemo samo 2 element u nizu
    


    
    