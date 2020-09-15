<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>
    <?php
      // zonder array
      $ll1 = "Celine";
      $ll2 = "Ashely";
      $ll3 = "Astghik";
      $ll4 = "Siemon";
      $ll5 = "Raf";
      $ll6 = "Dylan";
      $ll7 = "Jonas";

      echo $ll1;
      echo $ll2;
      echo $ll3;
      echo $ll4;
      echo $ll5;
      echo $ll6;
      echo $ll7;

      echo "<br>";

      //met array
      $llnlijst = array("Celine", "Ashley", "Astghik", "Siemon", "Raf", "Dylan", "Jonas");

      //afdrukken optie 1
      echo $llnlijst[0];
      echo $llnlijst[1];
      echo $llnlijst[2];
      echo $llnlijst[3];
      echo $llnlijst[4];
      echo $llnlijst[5];
      echo $llnlijst[6];
      echo "<br>";

      //afdrukken optie 2
      $t = 0;
      while ($t <= 6){
        echo $llnlijst[$t];
        $t++;
      }
      echo "<br>";


      //afdrukken optie 3
      for ($t = 0; $t <= 6; $t++){
        echo $llnlijst[$t];
      }
      echo "<br>";

      //afdrukken optie 4 !BESTE!
      foreach ($llnlijst as $ll ) {
        echo $ll;
      }
      echo "<br>";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
