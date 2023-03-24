<?php

use Table\Database\QueryProvider;

include('./template/navbar.php');
require_once('./app/table/QueryProvider.php');
$qr = new QueryProvider();
$sqlQuery = 'INSERT INTO users(email, password, isAdmin) VALUES (:email,:password,:isAdmin)';
$arrayBind = [':email'=>'myemail@gmail.com',':password'=>'asdfgh',':Admin'=>true];

$userId = $qr->insertQuery($sqlQuery,$arrayBind);


?>

<div class="container pt-3">
    <h3>DAA AE Ina Zimmermann</h3>
   <?=var_dump($qr->getError())?>
</div>



<?php include('./template/footer.php'); ?>