<h1>Step 3/7: Installing Plugins</h1>
<p>Download URLs for all WordPress Plugins</p>
<form method="post">
Username: <input type="text" name="uname" /><br>
Password: <input type="text" name="pwrd" /><br>
DBName: <input type="text" name="dbname" /><br>
  <input type="hidden" name="step" value="9" />
  <input type="submit" name="submit" value="Next" class="button button-large" />
</form>


<!--
$_POST['uname']
$_POST['pwrd']
$_POST['dbname']

https://premium94.web-hosting.com:2083/
-->


<?php
$servername = "premium94.web-hosting.com";
$username = "$_POST['uname']";
$password = "$_POST['pwrd']";

// Create connection
$conn = new $_POST['dbname']($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>