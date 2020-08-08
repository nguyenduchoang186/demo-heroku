<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div style="background:#e5e5e5; overflow: hidden; height: 1080px; " >
        <div class="container" >
        <div class="row justify-content-md-center">
            <div class="col-sm-6 " >
                <form class="border" style="margin-top: 200px; padding: 30px; background: #ffff; border-radius: 4px;" method="post" action="User_controller/login">
                    <h3 align="center" style="margin-bottom: 20px; color: ">AD Setting </h3>
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="text" name ="username" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                    <div class="text-center" style="margin-bottom: 15px">
                        <button type="submit" class="btn btn-success btn-lg col-sm-5" style="text-align: center; ">Login</button>
                    </div>
                    <div>
                        <h5>If you fogot your password, <a href="">click here</a> </h5> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
		
		
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
