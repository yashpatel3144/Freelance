<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('bg1.jpg') ;
  background-size: auto;
  border-image-width: fit;
  background-size: 1200px 900px;

}

  .card1{
    margin-top:100px;
      margin-left: 400px; 
  }
    .card2{
    margin-top:100px;
    margin-left: 400px;
  }

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

  .h{

    text-align: center;
    font-family: initial;
   font-size: 50px;
   font-style: oblique;
   color:powderblue;
  }
    .b{
      font-size: 20px;
      width: 50px;
      border: none;
      outline: none;
      background: #ffc300;
      font-family: 'poppins',sans-serif;
      cursor: pointer;
      color: blue;


       }
</style>
</head>
<body>


      <p class="h">Choose Freelancer</p>

<div class=card1>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="MaleAvatar1.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Name:John Doe</h1> 
       <br>
      <h3 style="font-family: cursive;">About</h3>
      <li>Designer</li> 
      <li>Expert In Logo Designing</li>
      <br><br><br><br>
      <button class="b">       <a href="design.php">Hire</a> </button>

    </div>
  </div>
</div>
</div>

    <div class="card2">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="FemaleAvatar.jfif" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Name:Ava</h1> 
      <br>
      <h3 >About</h3>
      <li>Game Art</li> 
      <li>Expert In Graphics</li>
      <br><br><br><br>
      <button class="b"> <a href="Page1.php">Hire </a></button>

    </div>
  </div>
</div>
</div>

 


</body>
</html>