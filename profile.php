 <?php

 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title></title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');


*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
}


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}



        </style>




 </head>
 <body>
<script src="1.js"></script>


 
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create Profile</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate action=" " method="POST">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                               <div class="valid-feedback"></div>
                               <div class="invalid-feedback"></div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 <div class="valid-feedback"></div>
                                 <div class="invalid-feedback"></div>
                            </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" name="Category" required>
                                      <option selected disabled value="" >Category</option>
                                      <option value="Design">Design & Graphics</option>
                                      <option value="Web Devlopment">Web Developer</option>
                                      <option value="Digital">Digital Marketing</option>
                                        <option value="music">Music & Voice</option>
                                        <option value="animation">Video & Animation</option>
                                        <option value="writing">Writing & Translate</option>
                               </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                           </div>


                             <div class="col-md-12">
                                <select class="form-select mt-3" required name="Experience"> 
                                      <option selected disabled value=""  >Experience</option>
                                      <option value="Beginner">Beginner</option>
                                      <option value="6-12 Months">6-12 Months</option>
                                      <option value="1-2 years">1-2 years</option>
                                        <option value="2-3 years">2-3 years</option>
                                        <option value="More Than 3 years">More Than 3 years</option>
                                       
                               </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                           </div>

                          <br>

                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" value="m" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" value="f" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                          
                               <div class="valid-feedback mv-up"></div>
                                <div class="invalid-feedback mv-up"></div>
                            </div>

                        
                  

                            <div class="form-button mt-3">
                                 <input type="submit" name="submit">
                            </div>
                        </form>
                         <?php

                            include("db_conn1.php");


             if(isset($_POST['submit']))
                {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $Category=$_POST['Category'];       
                $Experience=$_POST['Experience'];
                $gender=$_POST['gender'];



                $result=mysqli_query($conn,"INSERT into fprofile values('$name','$email','$Category','$Experience','$gender')");

                if($result)
                {

                  echo"Sucess";
                }
                else{
                    echo"failed";
                }
            }
            
            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




 </body>
 </html>