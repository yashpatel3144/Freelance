<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Main Page</title>

 
<style type="text/css">
  
  .a{
    height:470px ;
    width: 1200px;
    opacity: 0.7;

  }
  .space{
    position: relative;left: 650px;
  }
    .text {
  position: relative;
  text-align: center;
  color: white;
  }

    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 70px;
  color: black;
}



   
    
</style>
   
</head>
<body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <nav class="navbar navbar-default">
   <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-family: cursive;"><b>Freelance</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="Page1.php ?>">Fields</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="help.php">About</a></li>

      <li><a class="space" href="index.php">Log In </a></li>
       <li><a class="space" href="logout.php">Log Out</a></li> 
    </ul>
  </div>
</nav>
<div class="text">
    <img class="a" src="keyboard.jpeg" >
    <div class="centered" style="font-family: cursive;">Freelance</div>
   
</div>
</body>

