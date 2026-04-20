<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h2>💼 Job Portal</h2>
    <a href="logout.php">Logout</a>
</div>

<!-- 🔥 ADD IMAGE HERE (THIS IS CORRECT PLACE) -->
<div class="banner">
    <img src="images/job.jpg" alt="Job Banner">
</div>

<!-- Title -->
<div class="hero">
    <h2>Available Jobs</h2>
</div>

<!-- Job Cards -->
<div class="jobs">

<?php
$res = $conn->query("SELECT * FROM jobs");

while($row = $res->fetch_assoc()){
echo "<div class='card'>
<h3>{$row['company']}</h3>
<p>{$row['title']}</p>
<p>₹{$row['salary']}</p>

<form action='apply.php' method='post' enctype='multipart/form-data'>
<input type='hidden' name='job_id' value='{$row['id']}'>

<!-- Upload Resume -->
<input type='file' name='resume' required>

<button>Apply</button>
</form>

</div>";
}
?>

</div>

</body>
</html>