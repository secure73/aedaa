<?php

include('./template/navbar.php'); 
/*
require_once('./app/table/QueryProvider.php');
$qp = new QueryProvider();
//$sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
//$arrayBind = [':email'=>'myemail@gmail.com',':password'=>'sajhdjadd',':isAdmin'=>true];
//$userId = $qp->insertQuery($sqlQuery,$arrayBind);
//$updateQuery = 'UPDATE users SET email= :email , password = :password , isAdmin= :isAdmin WHERE id = :id';
//$arrayUpdateBindValue = [':email'=>'newEmail@gmail.com' , ':password' => 'ewpass' , ':isAdmin' => false , ':id'=>1];
//$qp->updateQuery($updateQuery,$arrayUpdateBindValue);
//$deleteQuery = 'DELETE FROM users WHERE id = :id';
//$arrayBindDelete = [':id'=>3];
//$qp->deleteQuery($deleteQuery,$arrayBindDelete);
$selectQuery = 'SELECT * FROM users WHERE 1';
$answerSelectQurey = $qp->selectQuery($selectQuery);
*/
use App\Table\UserTable;

require_once('./app/table/UserTable.php');
$myUser = new UserTable();
//$myUser->insert('ahmet2@gmail.com', 'aa11', false);
//$myUser->updatePassword('12345', 14);
//$myUser->delete(14);
//$myUser->updateAdmin(14, false);

require_once('./app/table/QueryProvider.php');

$myUser = new UserTable();
$result = $myUser->selectByEmail('newEmail@gemail.com')


?>
<div class="container pt-3">
    <h3>DAA Erik Koop</h3>

    <?= var_dump($myUser)?>
   
</div>



<?php include('./template/footer.php'); ?>;
