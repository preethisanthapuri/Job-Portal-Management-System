<?php include "db.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h2>💼 Job Portal</h2>
</div>

<div class="center">
<div class="box">

<h2>Login</h2>

<form method="post">
<input name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
$q=$conn->query("SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]'");

if($q->num_rows>0){
$row=$q->fetch_assoc();
$_SESSION['user_id']=$row['id'];
header("Location: home.php");
}else{
echo "<p style='color:red;'>Invalid Login</p>";
}
}
?>

</div>
</div>