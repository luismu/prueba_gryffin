<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />  
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
           <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
         
            <div class="account-wall">
               <h1 class="text-center login-title">INICIO DE SESION</h1>
                <form class="form-signin" action="{{ url('/login') }}" method="POST">
                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
             
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
          
        </div>
    </div>
</div>
    </body>
</html>