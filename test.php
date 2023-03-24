<?php

use Table\Database\QueryProvider;

include('./template/navbar.php'); 

require_once('./app/table/QueryProvider.php');
$qp = new QueryProvider();

//$sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
//$arrayBind = [':email'=>'deneme@gmail.com',':password'=>'12345',':isAdmin'=>true];

//$userId = $qp->insertQuery($sqlQuery,$arrayBind);

//$updateQuery= 'UPDATE users SET email= :email, password = :password, isAdmin= :isAdmin WHERE id= :id';
//$arrayUpdateBinValue = [':email'=>'newEmail@gmail.com', ':password' => '123456', ':isAdmin'=>false, ':id'=>1];
//$qp->updateQuery($updateQuery, $arrayUpdateBinValue);

$selectQuery = 'SELECT * FROM users WHERE 1';
$answerSelectQuerey = $qp->selectQuery($selectQuery);

?>

<div class="container pt-3">
    <h3>DAA AE Ina Zimmermann</h3>
    <?=var_dump($qp->getError())?>
</div>



<?php include('./template/footer.php'); ?>