<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Figura 1 </h2>
    <?php
        $i=1;
    while ($i < 6) {
    echo "*";
    echo "<br>";
    $i++;
    }
     ?>
     <h2>Figura 2 </h2>
     <?php
     for ($i=5; $i < 15; $i++) {
       echo "*****";
       echo "<br>";
       $i++;
     }
      ?>
      <h2> Figura 3</h2>
  <?php
  for ( $i = 1 ; $i  <=  7 ; $i ++ ) {
    for ( $b = 1 ; $b  <=  $i ; $b ++ ) {
      echo  " * " ;
    }
  echo  " <br> " ;
    }
   ?>
   <h2> Figura 5 </h2>
   <?php
   $figura = 10 ;
      for ( $i = 1 ; $i  <=  $figura ; $i ++ ) {
        for ( $asteriscos = 1 ; $asteriscos  <=  $i ; $asteriscos ++ ) {
          if (( $i % 2 ) ==  1 ) {
              echo  ' * ' ;
          }
        }
            echo  ' <br> ' ;
        }
        echo  " <br> " ;
     ?>
  </body>
</html>
