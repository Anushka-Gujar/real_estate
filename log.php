<?php
	$conn = new mysqli('localhost','root','Anushka@108','anu','4306');
  // mysql_connect('localhost','root','Anushka@108','anu','4306');
  // mysql_select_db("anu");

if(isset($_POST["user"]))
{
  $user=$_POST["user"];
  $pass=$_POST["pass"];

  $query=mysqli_query($conn,"select * from registration where username='$user' and password='$pass'");
  $count = mysqli_num_rows($query);    
  if($count==1)
  {
    echo "login succsefully";
  }
  else{
    echo "your username and password is wrong";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.12.php"><b>GO TO THE HOME PAGE</b></a>
</body>
</html>