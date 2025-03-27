<?php include('header.php'); ?>
<h1>Login system </h1>

<div class="container">

<form class="form" name="form 1" method="post" action="check_login.php">
   <div class="form-group"> 
  <label>Login name</label>
  <input class="form-control" name="username" type="text" id="username" >
   </div>

  <div class="form-group"> 
  <label>password</label>
  <input class="form-control" name="password" type="text" id="password">
  </div>
  <div><br></div>
  <div class="form-group">
  <input type="submit" name="login" value="login" class="btn btn-success" >
 </div>
 </form>
</div>

<?php include('footer.php'); ?>