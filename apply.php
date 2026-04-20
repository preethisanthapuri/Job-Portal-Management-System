<?php
include "db.php";

$user = $_SESSION['user_id'];
$job = $_POST['job_id'];

/* File upload */
$filename = $_FILES['resume']['name'];
$tmpname = $_FILES['resume']['tmp_name'];

$folder = "uploads/" . $filename;

/* Create folder if not exists */
if(!is_dir("uploads")){
    mkdir("uploads");
}

move_uploaded_file($tmpname, $folder);

/* Save in DB */
$conn->query("INSERT INTO applications(user_id,job_id,resume)
VALUES($user,$job,'$filename')");

echo "<script>alert('Applied with Resume!');window.location='home.php';</script>";
?>