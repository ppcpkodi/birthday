
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="images/pexels-photo-257360.jpeg">

    
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="well meta">
            <h3><b>Nature Photography</b></h3> 
            </div>
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Nature Photography</a>
            </div>
          
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">Concept</a>
                    </li>
                    <li>
                        <a href="me.html">About me</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>
    
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container havi" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class=""></strong>
                     <img src="images/login_Button5.jpg" width="300" height="200" alt="Avatar" class="avatar">

                </div>
                <div class="panel-body">
                   
                   <form name="" method="POST">
    


    <div>
        <label> Enter the email: </label>
        <input type="email" name="s_email" placeholder="Students email" required>
    </div>
    <br>

<div>
        <label> Enter the password: </label>
        <input type="password" name="s_password" placeholder="Students password" required>
    </div>
    
<br>
    
<div> 
        <input type ="submit" name="login_btn" value="login" >

        <input type ="reset" name="reset_btn" value="reset">
    </div>
    
</form>

                    <?php
include("connection.php");
if(isset($_POST['login_btn']))
{


    $s_email=$_POST['s_email'];
$s_password=$_POST['s_password'];
$sql=mysqli_query($con,"SELECT * FROM `register` where `s_email`='$s_email' AND `s_password`='$s_password'")or die(mysqli_error($con));
$row=mysqli_fetch_array($sql);


if($row)
{
    header("location:gallery.html");
}
else
{
    echo"<h4>INVALID email or password</h4>";
}
}

?>
<div class="panel-footer">Not Registered? <a href="register.html" class="">Register here</a>
                </div>
    </div>
</div>
</div>
</div>
                
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <footer class="edit">
    <p>Copyright &copy;- Allrights reserved,Designed and developed by:PRUTHVI P C</p>
</footer>

</body>

</html>
