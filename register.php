<?php include "db.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="center-box">
<h2>Register</h2>

<form method="post">
<input name="name" placeholder="Name" required>
<input name="email" placeholder="Email" required>
<input type="password" name="password" required>
<button name="reg">Register</button>
</form>

<?php
if(isset($_POST['reg'])){
$conn->query("INSERT INTO users(name,email,password)
VALUES('$_POST[name]','$_POST[email]','$_POST[password]')");
echo "<p style='color:green;'>Registered!</p>";
}
?>
</div>