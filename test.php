<?php include('./template/navbar.php');

require_once('./app/table/DatabasePdoConnection.php');

$connection = new DatabasePdoConnection();
$connection->connect();

?>
<div class="container pt-3">
    <h3>DAA AE Ina Zimmermann</h3>
    <?=$connection->isConnect()?>
</div>



<?php include('./template/footer.php'); ?>