<?php
$conn = new mysqli("localhost", "root", "", "job_db");

if ($conn->connect_error) {
    die("DB Error");
}

session_start();
?>