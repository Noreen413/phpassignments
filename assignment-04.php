<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-04</title>
</head>
<body>
    
<?php
$cities = array("Karachi", "Islamabad", "Lahore", "Peshawar", "Skardu", "Gilgit");
?>

    <style>
           table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #1f618d;
            padding: 10px;
            text-align: center;
            background-color:#dfb90e;
        }
        th {
            background-color:#dfb90e ;
        }
        h2,h1{
            color:#dfb90e;
        }
    </style>

<?php
  $names = count($cities)
?>

    <table>
        
            <tr>
                <th>S.No</th>
                <th>Cities Name</th>
            </tr>
            <?php
           for($i = 0; $i< $names; $i++){
            echo "<tr><td>$i</td><td>$cities[$i]</td></tr>";
           }
           ?>

    </table>

<h1>Countries and their capitals</h1>


<?php
$countries = array(
    "Pakistan"=>"Islamabad",
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", 
    "France" => "Paris"
 );   


foreach($countries as $capitals=> $countries_value){
    echo "The capital of"." ".$capitals." ". "is". " ".$countries_value;
    echo"<br>";
    

}
?>
<h2>NOREEN BATOOL</h2>



















</body>
</html>