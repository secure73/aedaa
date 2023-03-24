<?php

include('./template/navbar.php'); 
/*
use Table\Database\QueryProvider;


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
*/

use App\Table\UserTable;

require_once('./app/table/UserTable.php');
$myUser = new UserTable();
$myUser->insertUser('besterschüler@gmail.com', 'ich bin der beste', false);

?>

<div class="container pt-3">
    <h3>DAA AE Ina Zimmermann</h3>
    <?=$myUser->getError(); ?>
</div>



<?php include('./template/footer.php'); ?>