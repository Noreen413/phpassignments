<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
      .container{
        text-align:center;
        padding:200px;
        height: 200px;
        width:400px;
        background-color:#0edfcf; 
      }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Grade Calculator</h2>
    <?php
        $marks = 65; // You can change this value to test different cases
        $grade = "";

        if ($marks < 0 || $marks > 100) {
            echo "<p class='error'>Error: plrase inter a valide number. Marks should be between 0 and 100.</p>";
        } else {
            if ($marks >= 90 && $marks <= 100) {
                $grade = "A";{
                    echo "<div>welldone you got A<sup>+</sup></div>";
                }
            } elseif ($marks >= 80 && $marks <= 89) {
                $grade = "B";{
                    echo "<div>Good you got B grade</div>";
                }
            } elseif ($marks >= 70 && $marks <= 79) {
                $grade = "C";{
                    echo "<div>you got C grade</div>"; 
                }
            } elseif ($marks >= 60 && $marks <= 69) {
                $grade = "D";{
                    echo "<div>you got D grade</div>";
                }
            } else {
                $grade = "F";{
                 echo   "<div>try again next year</div>";
                }
            }

            echo "<p>Your Grade: $grade</p>";
        }
    ?>
 </div>
</body>
</html>
