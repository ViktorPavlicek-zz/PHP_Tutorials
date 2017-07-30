<?php

#                                           :: if klauzula ::

    If ( true ) {
        echo "Prikaz!"; # jezicka konstrukcija koja ne zahteva zagrade
        printf ("prikaz!!\n"); # funkcija zahteva zagrade, ( \n )- prelazak u novi red (new line)
    } else {
        echo "Nema niceg za prikaz!";
        printf("Nema nicega za prikaz!\n");  
    }
?>

<br>

<?php

 #                                           :: for petlja ::

    for ( $i=0; $i<10; $i++ ) { # ( $i++ ) - je povecanje za 1; ( $i = $i + 1,2,3... ) - moze i ovako da napise i poveca
        echo "Vrednost je " . $i . "<br>";
        echo "Vrednost je $i <br>"; # moze i ovako da se napise ( Ali samo sa dvostukim apostrofima "" )
        echo 'Vrednost je $i <br>'; # ispisuje kako je napisano sa jednostrukim apostrofima ''! 
        
        $sting = sprintf("Vrednost je: %5d<br>\n", $i); # ( %5d ) - ukupno 5 meseca nakon novog razmaka za jedan integer
        echo $sting;   
    }
?>
<br>
<?php
    $broj1 = 10705;
    
    while ( $broj1 > 200 ) { 
        $broj1 /= 4. ; # delimo broj na 4 ( realno delenje ) 
        echo $broj1 . "<br>";
    }

echo "<br>";

    $broj2 = 10705;
    
    do {
        echo $broj2 . "<br>";
        $broj2 /=3. ;
    } while ( $broj2 >= 300 ); # kada se broj podeli sa 3 izvrsava ce se sve do broja 300    
?>    
<br> 
<?php
    $niz = [ 13.6, 55.0, -1.5, 0.09, 100.0 ];
    
    #                                       :: for petlja + if ::
    
    for ( $i=0; $i<count($niz); $i++ ){ # brojac pocinje od 0 pa ce se ( $i ) povecavati onoliko puta koliko imamo elemenata u nizu i povecavamo za jedan brojac 
        if ( $niz[$i] >= 50.0 ) { # da li je ( $i ) vrednost veca ili jednako od 50  
            echo $niz[$i] . "<br>"; # ako jeste ispisi
            printf("%.2f<br>", $niz[$i]); # prikazati sa 2 decimale
        }
    }
    
    echo "<br>"; 
    
    #                                     ::for each petlja + if::
    
    foreach ( $niz as $item ) { # iz svakog elementa niza izvuci jedan pod imenom ( $item )
        if ( $item >= 50.0 ) {
            printf ( "%.2f<br>", $item );
        }
    }
    
   echo "<br>";
    
    foreach ( $niz as $index => $item1 ) { 
       if ( $item1  >= 50.0 ) {
           printf( "%.2f je na %d. indexu niza.<br>", $item1, $index );
       }
    }
?>
<br>
<?php #                                         :: niz :: 
    $niz1 = [ 13.6,  # 0
              55.0,  # 1
              -1.5,  # 2
               0.09, # 3
               100.0 # 4
        ];
    echo $niz1 [2]; # ispisi mi 2 niz
    echo "<br>"; #                           :: asocijativni niz ::
    $niz2 = [
        "ime" => "Viktor",
        "prezime" => "Pavliček",
        "institucija" => "Univerzitet Singidunum"  
    ];
    
    echo $niz2["prezime"];# ispisi samo "prezime"
?>
