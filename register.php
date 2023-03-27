<?php include('./template/navbar.php'); 
include('./template/navbar.php');
require_once('./app/controller/RegisterController.php');

if (isset($_POST ))
{
  var_dump($_POST);
}


?>

<h1>Register</h1>
<div class="card flex m-5 p-5 bg-secondary">
<form method="post" target="_self" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="pasword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


<?php include('./template/footer.php'); ?>