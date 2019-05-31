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
  <h4>choose 2 names from the list below to transfer the credits from one user to another</h4>    
  <table class="table ">
    <thead class="thead-light">
      <tr>
        <th>names</th>
      </tr>
    </thead>
    <tbody>
     <tr>
      <td>abhinay</td>
    </tr>
      <tr>
        <td>sai</td>
      </tr>
      <tr>
        
        <td>july</td>
      </tr>
       <tr>
        
        <td>john</td>
      </tr>
      <tr>
        <td>mary</td>
      </tr>
    </tbody>
  </table>
  <form action="final.php" method="post">
    From:<input type="text" name="value1" placeholder="enter name"></br>
     To:<input type="text" name="value2" placeholder="enter name"></br>
        
        credits:<input type="text" name="value3" placeholder="enter no
 of credits">
        <input type="submit" name="send" onclick="location.href='final.php'">
    
  </form>
</div>


</body>
</html>









