<?php

$user = 'newsletteree02baad';
$password = 'Secret.1';
$host = '10.0.0.57';
$dbase = 'newsletter25361119';
$table = 'subscribers';


// Connect to DBase 
$dbc = mysqli_connect($host, $user, $password, $dbase)
    or die("Unable to connect");


$query = "CREATE TABLE IF NOT EXISTS $table ( `id` INT NOT NULL AUTO_INCREMENT , `first_name` TEXT NULL , `last_name` TEXT NULL , `email` VARCHAR(60) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`), UNIQUE `uniqueemail` (`email`)) ENGINE = InnoDB;";


$result = mysqli_query($dbc, $query)
    or die('Error creating table. ' . mysqli_error($dbc));
