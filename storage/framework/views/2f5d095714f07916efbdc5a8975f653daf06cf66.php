<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
      <img src="/images/5.jpg">
        
      </div>
      <form method="POST" action="<?php echo e(route('auth.save')); ?>">  

<?php if(Session::get('success')): ?>
<div class="alert alert-success"></div>
   <?php echo e(Session::get('success')); ?>


<?php endif; ?>

<?php if(Session::get('fail')): ?>
<div class="alert alert-danger"></div>
   <?php echo e(Session::get('fail')); ?>


<?php endif; ?>
     <?php echo csrf_field(); ?>
     <div class="text-center"><h3>Register</h3></div>
     <div class="form-group p-2">      
          <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo e(old('name')); ?>"> 
          <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 
      </div>  
       
     <div class="form-group p-2">      
         <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
         <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
     </div> 
     
     <div class="form-group p-2">      
         <input type="password" class="form-control" name="password" placeholder="Password">
         <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>  
     </div> 
     <div class="form-group p-2">      
         <input type="password" class="form-control" name="password_confirmation" placeholder="confirm Password">
         <span class="text-danger"><?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>  
     </div> 
    
    

     <div class="form-group p-2">      
         <input type="submit" class="form-control btn-secondary text-center" name="Submit">
     </div>
     <div>
     <a href="<?php echo e(route('auth.login')); ?>" class="text-danger">Sign in</a>
     </div>
</form>

    </div>
  </body>
</html>








<!-- <!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  .ms{
          margin-left:39%;
  }
  </style>
</head>
<body>
     
<div class="home row">
<div class="container  col m-5">
  <div class="card st text-center">
    <div class="card-header bg-success">
      <h2>Sign Up</h2>
    </div>
      <div class="card-body">
      <form method="POST" action="<?php echo e(route('auth.save')); ?>"  class=" m-5 p-5 " >  

<?php if(Session::get('success')): ?>
<div class="alert alert-success"></div>
   <?php echo e(Session::get('success')); ?>


<?php endif; ?>

<?php if(Session::get('fail')): ?>
<div class="alert alert-danger"></div>
   <?php echo e(Session::get('fail')); ?>


<?php endif; ?>
     <?php echo csrf_field(); ?>
     <div class="text-center"><h3>Register</h3></div>
     <div class="form-group p-2">      
          <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo e(old('name')); ?>"> 
          <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 
      </div>  
       
     <div class="form-group p-2">      
         <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
         <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
     </div> 
     
     <div class="form-group p-2">      
         <input type="password" class="form-control" name="password" placeholder="Password">
         <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>  
     </div> 
     <div class="form-group p-2">      
         <input type="password" class="form-control" name="password_confirmation" placeholder="confirm Password">
         <span class="text-danger"><?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>  
     </div> 
    
    

     <div class="form-group p-2">      
         <input type="submit" class="form-control btn-dark" name="submit">
     </div>
     <div>
     <a href="<?php echo e(route('auth.login')); ?>">Sign in</a>
     </div>
</form>
</div class="card">
</div>
</div>


</body>
</html>
 -->
<?php /**PATH G:\laravel\reg_login\resources\views/auth/register.blade.php ENDPATH**/ ?>