<?php

use Table\Database\QueryProvider;

include('./template/navbar.php'); 

require_once('./app/table/QueryProvider.php');
$qp = new QueryProvider();

$sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
$arrayBind = [':email'=>'myemail@gmail.com',':password'=>'sajhdjadd',':isAdmin'=>true];
$userId = $qp->insertQuery($sqlQuery,$arrayBind);

//$updateQuery = 'UPDATE users SET email= :email , password = :password , isAdmin= :isAdmin WHERE id = :id';
//$arrayUpdateBindValue = [':email'=>'newEmail@gmail.com' , ':password' => 'ewpass' , ':isAdmin' => false , ':id'=>1];
//$qp->updateQuery($updateQuery,$arrayUpdateBindValue);

//$deleteQuery = 'DELETE FROM users WHERE id = :id';
//$arrayBindDelete = [':id'=>3];
//$qp->deleteQuery($deleteQuery,$arrayBindDelete);

$selectQuery = 'SELECT * FROM users WHERE 1';
$answerSelectQurey = $qp->selectQuery($selectQuery);

?>

<div class="container pt-3">
    <h3>DAA AE Andrej Mehl</h3>
    <?=var_dump($answerSelectQurey)?>
</div>



<?php include('./template/footer.php'); ?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>