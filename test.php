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
    <h3>DAA AE Ina Zimmermann</h3>
    <?=var_dump($qp->getError())?>
</div>



<?php include('./template/footer.php'); ?>
