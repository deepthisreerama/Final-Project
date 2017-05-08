<?php
require('../model/db_connect.php');
require('../model/db.php');
$action = filter_input(INPUT_POST, "action");
if ($action == 'add') {
    $email = $_COOKIE['userid'];
    $itemname = filter_input(INPUT_POST, 'itemname');
    $description = filter_input(INPUT_POST, 'description');
    $date = filter_input(INPUT_POST, 'date');
    $time = filter_input(INPUT_POST, 'time');
    addTodoItem($email, $itemname, $description, $date, $time);
}
?>

<html>
    <body>
        <form id="myForm" action="index.php" method="post">

            <input type="hidden" name="action" value="redirect">
            
        </form>
    </body>
</html>
<script type="text/javascript">;
 document.getElementById('myForm').submit();
</script>;