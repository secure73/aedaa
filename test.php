<?php 

use Table\Database\QueryProvider;

include('./template/navbar.php');

require_once('./app/table/QueryProvider.php');
$qp = new QueryProvider();

//$sqlQuery = 'INSERT INTO users(email, password, isAdmin) VALUES (:email,:password,:isAdmin)';
//$arrayBind =[':email'=>'myemail@gmail.com',':password'=>'abcdef123',':isAdmin'=>true];
//$qp->insertQuery($sqlQuery,$arrayBind);

//$updateQuery = 'UPDATE users SET email = :email, password = :password, isAdmin = :isAdmin WHERE id = :id';
//$arrayUpdateBindValue = [':email'=>'newEmail@gmail.com', ':password'=>'newpass', ':isAdmin'=> false, ':id'=>1];
//$qp->updateQuery($updateQuery,$arrayUpdateBindValue);

//$deleteQuery = 'DELETE FROM users WHERE id = :id';
//$arrayBindDelete = [':id'=>3];
//$qp->deleteQuery($deleteQuery,$arrayBindDelete);

selectQuery = 'SELECT * FROM users WHERE 1';
$answerSelectQuery = $qp->selectQuery($selectQuery);



?>
<div class="container pt-3">
    <h3>DAA AE Ina Zimmermann</h3>
    <?=var_dump($answerSelectQuery)?>
</div>



<?php include('./template/footer.php'); ?>