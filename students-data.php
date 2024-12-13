<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .text-success{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitizing and validating form inputs
            $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
            $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
            $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
            $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
            $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

            // Displaying data in an HTML table if all inputs are valid
            if ($firstName && $lastName && $dob && $address && $mobile && $email) {
                echo '<div class="mt-4">';
                echo '<h4 class="text-success">Submitted Data</h4>';
                echo '<table class="table table-bordered mt-3">';
                echo '<thead><tr><th>Field</th><th>Value</th></tr></thead>';
                echo '<tbody>';
                echo '<tr><td>First Name</td><td>' . htmlspecialchars($firstName) . '</td></tr>';
                echo '<tr><td>Last Name</td><td>' . htmlspecialchars($lastName) . '</td></tr>';
                echo '<tr><td>Date of Birth</td><td>' . htmlspecialchars($dob) . '</td></tr>';
                echo '<tr><td>Address</td><td>' . htmlspecialchars($address) . '</td></tr>';
                echo '<tr><td>Mobile Number</td><td>' . htmlspecialchars($mobile) . '</td></tr>';
                echo '<tr><td>Email</td><td>' . htmlspecialchars($email) . '</td></tr>';
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo '<div class="mt-4 text-danger">Invalid input data. Please check and try again.</div>';
            }
        }
        ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>