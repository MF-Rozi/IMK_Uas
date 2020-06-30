<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page!</title>
</head>
<body>
  <!-- Login Menu -->
    <div class="container ">
        <div class="jumbotron jumbotron-fluid"
         style="margin:5em; margin-left:30%; margin-right:30%">
            <h2 class="text-center ">Silahkan Masuk</h2>

            <div class="login-form" >
                <form action="includes/login.php" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="login">Sign in</button>
                    </div>
                    <div class="clearfix">
                        <a href="#" class="pull-right">Forgot Password?</a>
                    </div>
                </form>

            </div>

        </div>

    </div>

</body>
</html>