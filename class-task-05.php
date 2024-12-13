<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classtask</title>
</head>
<body>
    <?php
    $firstname= "Noreen" ;  
    $lastname= "Batool";
    function stucent(){

        global  $firstname,$lastname;

        $fulname =$firstname . $lastname ;

        echo $fulname;

    }
    stucent()
    ?>


<?php
   
    function myself(){
        $firstname= "Maryam" ;  
        $lastname= "Muskan";
        
        $fulname = $firstname . $lastname ;

        echo $fulname;

    }
    myself()
    
    ?>
</body>
</html>