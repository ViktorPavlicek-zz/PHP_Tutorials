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
    echo count(niz2);

echo "<br>";  
   
    echo $niz2[1]; # nako rabijanja na 2 elementa prikazacemo samo 2 element u nizu
    
?>    
<br>   
<?php
    $naziv = " Univerzitet Singidunum ";
    
    echo "Duzina stringa " . $naziv . " je: " . strlen($naziv) . "<br>"; # br. karaktera
    
    echo "Broj elemenata: " . count(explode(" ",$naziv)) . "<br>";
    
    echo "Prva 4 slova su: " . substr($naziv, 0, 4) . "<br>";
    
    echo "Slova 4, 5 i 6 su: " . substr($naziv, 3, 3) . "<br>"; 
    
    echo "Sve od 12 slova pa na dalje je: " . substr($naziv, 12) . "<br>";
    
    echo "Sve od 10 slova pa na dalje je: " . substr($naziv, 10) . "<br>"; # razmak nezavisno koliki je racuna se kao jedan karakter
    
    echo "Sve malim slovima: " . strtolower($naziv) . "<br>";
    
    echo "Sve velikim slovima: " . strtoupper($naziv) . "<br>";
    
    $vreme = "2016-02-06 11:14:51"; # Datum i vreme u ISO formatu
    
    $unizVreme = strtotime($vreme);
    
    echo $unizVreme . " je " . $vreme . "<br>"; # 1454753691 - br. sekundi koji je prosao od 1. januara 1970 u ponoc do ovog datuma koji smo ispisali  
 

    
    