<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <button><a class="button" href="logout.php">Logout</a></button>
     <button><a class="button" href="data_users.php">Data Users</a></button>
</body>
</html>

<?php 
}else{
     header("Location: index_login.php");
     exit();

}
 ?>