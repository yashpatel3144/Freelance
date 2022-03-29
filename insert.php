<?php
include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<form action="" method="POST">

			Name<input type="text" name="name"><br>
			email<input type="email" name="email"><br>
			Mobile<input type="mobile" name="mobile"><br>
			Date<input type="date" name="date"><br>
			<input type="submit" name="submit">
		</form>

		<?php
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$mobile=$_POST['mobile'];
				$date=$_POST['date'];


				$result=mysqli_query($mysqli,"INSERT into record values('','$name','$email','$mobile','$date')");

				if($result)
				{
					echo"success";
				}
				else{
					echo"failed";
				}
				
			}


		?>

</body>
</html>