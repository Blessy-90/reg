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
    </head>
    <body class="bg-danger">
        <div>
            
            <h3 class="text-center text-warning"><?php echo e($data->name); ?></h3>
            <h3 class="text-center text-warning"><?php echo e($data->email); ?></h3>
</div>

    <div>
     
<a href="<?php echo e(route('auth.logout')); ?>">logout</a>

</div>


        
        <script src="" async defer></script>
    </body>
</html><?php /**PATH G:\laravel\reg_login\resources\views/auth/user.blade.php ENDPATH**/ ?>