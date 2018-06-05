<?php

$servername = "jtpweb.com.br:3306";
$username = "jtpwebcom_painel";
$password = "LaEY7DSO?Q^s";
$db_name = "jtpwebcom_painel";

$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>