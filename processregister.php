<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body{
            background-image:url('bg4.jpg');
            background-size:cover;
        }
        .container{
            margin-top:90px;
        }
    </style>
</head>
<body>
    <?php
        $username = $_POST['username'];
        $password =$_POST['password'];
        $email = $_POST['email'];
        $message =$_POST['message'];
        if (isset($_POST['login'])){
            header("location:index.php");
            die();
        }
        if (isset($_POST['register'])){
            header("location:register.php");
        }
        if(isset($_POST['submit'])){
            if($username === '' || $password === '' || $email === '' || $message ===''){
        ?>
                <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form action="#" method="post">
                            <div class="alert alert-warning">
                                <p> <strong>Field Cannot Empty</strong> Please fill in the fields.</p>
                            </div>
                            <button name="register" class="btn btn-primary btn-block">Back to Login</button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        <?php
            }else{
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="alert alert-success">
                                <p><strong>Succesful !!!</strong>Congratulation You have an account now.</p>
                            </div>
                            <button class="btn btn-primary btn-block" name="login">Back to login</button><br>
                            <div class="list-group">
                                <div class="list-group-item">Username:<?php echo " ".$username ?></div>
                                <div class="list-group-item">Password:<?php echo " ".$username ?></div>
                                <div class="list-group-item">Email:<?php echo " ".$email ?></div>
                                <div class="list-group-item">Message:<?php echo " ".$message ?></div>
                            </div>
                        </form>
                    </div>
            </div>
        <?php
            }
        }
        ?>

</body>
</html>