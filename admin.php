<?php
// Simple authentication (optional)
$admin_password = "admin123"; // Replace with your secure password

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['password'] !== $admin_password) {
        die("Access denied.");
    }
} else {
    echo '<form method="POST"><input type="password" name="password" placeholder="Enter admin password"><input type="submit" value="Submit"></form>';
    exit();
}

// Read the contents of the file
$file = fopen("userdata.txt", "r");
$data = fread($file, filesize("userdata.txt"));
fclose($file);

// Display the data
echo "<pre>$data</pre>";
?>
