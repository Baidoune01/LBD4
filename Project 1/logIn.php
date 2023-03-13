<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" action="LogIn.php" class="register-form" id="login-form" >
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_no" id="your_no" placeholder="Your ID"/>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="submit"/>
                            </div>
                            
                            
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        <?php
                
                $db = new mysqli("localhost","root","","employees");

                if(!empty($_POST['submit'])){
                    $id = $_POST['your_no'];
                    $query2 = "SELECT emp_no FROM dept_manager WHERE emp_no = '".$id."';";
                    $data2 = mysqli_query($db, $query2);
                    $num_rows = mysqli_num_rows($data2);
                    if ($num_rows > 0){
                        header("Location: admin.php");
                    }
                    
                    
                    echo "<meta http-equiv='refresh' content='0'>";
                }     
            ?>
        

    </div>

    
</body>
</html>