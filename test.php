<?php

use Table\Database\QueryProvider;

include('./template/navbar.php'); 

require_once('./app/table/QueryProvider.php');
$qp = new QueryProvider();

$sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
$arrayBind = [':email'=>'myemail@gmail.com',':password'=>'sajhdjadd',':isAdmin'=>true];

$userId = $qp->insertQuery($sqlQuery,$arrayBind);


?>

<div class="container pt-3">
    <br>
    <br>
    <br>
    <h3>DAA AE Nadine Stamm</h3>
</div>



<?php include('./template/footer.php'); ?>
