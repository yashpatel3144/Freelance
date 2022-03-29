
<?php
               
                include("fprofile.php");

                 if(isset($_POST['submit']))
                {
                $fname=$_POST['fname'];
                $email=$_POST['email'];
                $Category=$_POST['Category'];       
                $Experience=$_POST['Experience'];
                $gender=$_POST['gender'];

                }

                $result=mysqli_query($conn,"INSERT into freelancer values('','$fname','$email','$Category','$Experience','$gender')");

                if($result)
                {
                    echo'success';
                }
                else{
                    echo'F';
                }

/*
    $fname=$_POST['fname'];
                $email=$_POST['email'];
                $Category=$_POST['Category'];
                $Experience=$_POST['Experience'];
                $gender=$_POST['gender'];


                include("fprofile.php");

                if(isset($_POST['submit']))
                {
                $fname=$_POST['fname'];
                $email=$_POST['email'];
                $Category=$_POST['Category'];       
                $Experience=$_POST['Experience'];
                $gender=$_POST['gender'];

                }


                $result=mysqli_query("INSERT Into freelancer values('$fname','$email','$Category','$Experience','$gender');

                if($result)
                {
                    echo'success';
                }
                else{
                    echo'F';
                }
*/
?>

               