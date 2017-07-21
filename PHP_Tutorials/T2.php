<?php

    If ( true ) {
        echo "Prikaz!"; # jezicka konstrukcija koja ne zahteva zagrade
        printf ("prikaz!!\n"); # funkcija zahteva zagrade, '\n'- prelazak u novi red
    } else {
        echo "Nema niceg za prikaz!";
        printf("Nema nicega za prikaz!\n");  
    }
?>
<br>
<?php
    
    for ( $i=0; $i<10; $i++ ) { # ( $i++ ) - je povecanje za 1; ( $i = $i + 1,2,3... ) - moze i ovako da napise i poveca
        echo "Vrednost je " . $i . "<br>";
        echo "Vrednost je $i <br>"; # moze i ovako da se napise (Ali samo sa dvostukim apostrofima "" )
        echo 'Vrednost je $i <br>'; # ispisuje kako je napisano sa jednostrukim apostrofima ''! 
        echo "Vlada je picka!";
    }
    