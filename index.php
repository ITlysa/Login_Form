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
        background-image:url("bg2.jpg");
        background-size:cover;
    }
    b{
        font-size:28px;
        color:blue;
    }
    .card{
        background:lightgreen;
    }
</style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="processlogin.php" method="post">
                    <div class="card mt-5">
                        <div class="card-header text-center"><b>Login</b></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                            </div>
                            <input type="submit" name="submit" value="Login" class="btn btn-primary">
                            <input type="submit" name="register" value="Register" class="btn btn-danger float-right">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>