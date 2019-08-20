<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container{
            margin-top:90px;
        }
        body{
            background-image:url('bg3.jpeg');
        }
    </style>
</head>
<body>
    <?php
        $username = $_POST['username'];
        $password =$_POST['password'];
        if (isset($_POST['submit'])){
            if($username === 'admin' && $password === 'password'){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                    <form action="#" method="post">
                        <div class="alert alert-success">
                            <p> <strong>You have done a greate job!</strong> Successful of your job.</p>
                        </div>
                        <button name="login" class="btn btn-primary btn-block">Log Out</button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
            <?php   
            }elseif($username === '' && $password ===''){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form action="#" method="post">
                            <div class="alert alert-warning">
                                <p> <strong>Field Cannot Empty</strong> Please fill in the fields.</p>
                            </div>
                            <button name="login" class="btn btn-primary btn-block">Back to Login</button>
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
                    <div class="col-4"></div>
                    <div class="col-4">
                    <form action="#" method="post">
                        <div class="alert alert-danger">
                        <p> <strong>You don't have an account yet!</strong>Please register.</p>
                        </div>
                        <button name="register" class="btn btn-primary btn-block">Register</button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        <?php
            }
            
        }
        ?>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        header("location:index.php");
        die();
    }
    if(isset($_POST['register'])){
        header("location:register.php");
        die();
    }
?>