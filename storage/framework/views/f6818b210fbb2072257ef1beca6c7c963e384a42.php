<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="">
        <style>
            h2 
            {
                text-shadow:3px 4px 2px red;
            }
            body{
                background-image:url('../image/5.jpg');
                background-size:cover;
                background-attachment:fixed;
                height:100vh;
            }
            img{
                  background-size:cover;
                  background-repeat:no-repeat;
            }
            </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
    
        <a class="nav-link text-light" href="<?php echo e(route('auth.register')); ?>">Register</a>
        <a class="nav-link text-light" href="<?php echo e(route('auth.login')); ?>">Login</a>

        
      </div>
    </div>
  </div>
</nav>
<div>
    <img src="images/d.jpg" style="height:50vh; border-radius:50%; margin-left:32%; margin-top:10%;">
        </div>
        
        <script src="" async defer></script>
    </body>
</html><?php /**PATH G:\laravel\reg_login\resources\views/welcome.blade.php ENDPATH**/ ?>