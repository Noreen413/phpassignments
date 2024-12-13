<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handling Form in PHP</title>
  <style>
    .error{
      color: red;
    }
  </style>
</head>

<body>
  <h2> Form in PHP </h2>
  <?php 


$email = "<johndoeexample.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email;

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
 // define variables and set to empty values
 $nameErr = $emailErr = $genderErr = $websiteErr = "";
 $name = $email = $gender = $comment = $website = "";
                      
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {     
     $fullName = filter_var( $_POST['name'],FILTER_SANITIZE_STRING);
     echo $fullName;
      
    
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }

   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
 }



 function test_input($data) //    ali
 {       
   $data = trim($data);
   $data = stripslashes($data);  
   $data = htmlspecialchars($data);
   return $data;   
 }

  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Website:
    <input type="text" name="website">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">

  </form>

</body>

</html>