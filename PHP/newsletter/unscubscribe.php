<?php
require_once 'connection.inc.php';

$email = $_POST['email'];

$query = " DELETE FROM $table WHERE email='$email'";

$result = mysqli_query($dbc, $query)
    or die("Error removing email from database" . mysqli_error($dbc));

echo "You have been successfully unsubscribed";

mysqli_close($dbc);
