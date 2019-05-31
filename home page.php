<?php

  $mysqli=new mysqli('nuskkyrsgmn5rw8c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','ou58xo78xizkryol','o8buhrhb0i6nvmgg','vax8l9rx3ntwu3cs') or die(mysqli_error($mysqli));
    $result=$mysqli->query("select * from transfers order by credits desc") or die($mysqli_error);
    

?>
<!DOCTYPE html>
<html>
<head>
	<title title="Leaderboard" style="color: blue;">Leaderboard</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	
  </style>
</head>
<body>
<nav class="navbar navbar-default" style="background-color: black; ">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand" style="color: white;"> <span class="glyphicon glyphicon-home"> credit management task</span></a>
		</div>  
</div>
</nav>
<div class="container">
  <h2>leader board</h2>    
  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th>name</th>
        <th>Email</th>
        <th>credits</th>
      </tr>
    </thead>
    <tbody>
  <?php
  $i=1;
    while($row=$result->fetch_assoc()):?>
      <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['credits'] ?></td>
        
      </tr>
      <?php $i++;?>
    <?php endwhile;?>
    <tr align="center"><td><button type="button" class="btn btn-success" onclick="location.href='start1.php'">transfer</button></td></tr>
      
    </tbody>
  </table>
</div>


</body>
</html>



























