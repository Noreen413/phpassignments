<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<h2>function to reverse a string.</h2>
<?php

$string = "Hi we are learning about PHP.";

echo ($string);

echo "<br>";

echo strrev ($string);

?>
<h2> Function to calculate a factorialof a number</h2>

<?php
function factorial($number){
    if($number<2){
        return 1;
    } else{
        return ($number*factorial($number-1));

    }
}

echo factorial (6)
?>

<h2>function for checking the palindrome</h2>

<form  method=POST action='' name=form1>
    <input type="text" name=t1>
    <input type="submit" class='btn' value='check string '>
</form>

<?php

$t1=$_POST['t1'];
if(strlen($t1)>0){
    $length=strlen($t1);
    $t1_reverse='';
    if(strrev($t1)==$t1){
        echo "<i>$t1</i> is  a Palindrome";
    }else{
        echo "<i>$t1</i> is not a Palindrome"; 
    }
}else{ echo "Enter a string";}
?>


</body>
</html>
