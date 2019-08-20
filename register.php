<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        b{
            font-size:29px;
        }
        body{
            background-image:url('bg3.jpg');
            background-size:cover;
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
                <div class="card">
                    <div class="card-header text-center"><b>Register</b></div>
                    <div class="card-body">
                        <form action="processregister.php" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input name="username" type="text" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="email" type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" cols="40" rows="3"></textarea>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            <button name="login" class="btn btn-danger float-right">Back to Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>