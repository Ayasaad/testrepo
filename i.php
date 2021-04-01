<?php
function boardGame($X,$Y) {
    
    //this is default OUTPUT. You can change it.
    $result = -404;
    
    //bla bla bla 
    bomb om 
    $steps=0;
    //write your Logic here:
    
    while( $X < $Y){
        
        if($X * $X <= $Y){

            $X *= $X;
            $steps++;
            echo "DARB: move: ".$X."<br>";
            echo "steps:". $steps."<br>";
        }
        
        else {
            
            $X++;
            $steps++;
             echo "GAM3 : move: ".$X."<br>";
            echo "steps:". $steps."<br>";
        }
        
        
    }
        
    $result= $steps ;
    return $result;
}

// $handle = fopen ("php://stdin","r");
// // INPUT [uncomment & modify if required]
// $X = trim(fgets($handle));
// $Y = trim(fgets($handle)); 

// OUTPUT [uncomment & modify if required
$i = boardGame(2,10);
echo "$i";
?>