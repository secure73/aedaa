<?php include('./template/navbar.php'); ?>

<?php
use App\Table\UserTable;

require_once('./app/table/UserTable.php');
$myUser = new UserTable();
$myUser->insertUser('Admin@mail.com', '1234sicheresPW', false);

?>

<div class="container pt-3">
    <h3>Welcome Admin</h3>
</div>



<?php include('./template/footer.php'); ?>

