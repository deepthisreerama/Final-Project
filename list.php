<?php
$array_complete = array();
$array_todo = array();
foreach ($result as $res) {

    if ($res['complete'] == 1) {
        $array_complete[] = $res;
    } else {
        $array_todo[] = $res;
    }
}
echo "<h1> To do list system </h1></br>";
echo "Welcome, " . $_COOKIE['firstname'] . " " . $_COOKIE['lastname'] . '</br>';
echo "</br></br>";
?>

<html>
    <body>
        <table>
            <?php if (count($array_complete) > 0): ?>
                <?php echo "Below are your completed items: "; ?>
                <tr>
                    <th>To-do Item</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th class="right">Time</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <?php foreach ($array_complete as $res): ?>

                    <tr>
                        <td><?php echo $res['itemname']; ?></td>
                        <td><?php echo $res['description']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td><?php echo $res['complete']; ?></td>
                        <td class="right"><?php echo $res['time']; ?></td>

                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='item_id' value='<?php echo $res['id']; ?>'/>
                                <input type='hidden' name='action' value='delete'/>
                                <input type='submit' value='Delete'/>
                            </form></td>
                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='edit_id' value='<?php echo $res['id']; ?>'/>
                                <input type='hidden' name='action' value='show_edit_form'/>
                                <input type='submit' value='Edit'/>
                            </form>
                        </td>

                    </tr>   
                <?php endforeach; ?>

            </tr>
        <?php endif; ?>
    </table>

    <table>
        <?php if (count($array_todo) > 0): ?>
            <?php echo "Below are your to-do items: "; ?>
            <tr>
                <th>To-do Item</th>
                <th>Description</th>
                <th>Date</th>
                <th class="right">Time</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <?php foreach ($array_todo as $res): ?>

                <tr>
                    <td><?php echo $res['itemname']; ?></td>
                    <td><?php echo $res['description']; ?></td>
                    <td><?php echo $res['date']; ?></td>
                    <td><?php echo $res['complete']; ?></td>
                    <td class="right"><?php echo $res['time']; ?></td>

                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='item_id' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='delete'/>
                            <input type='submit' value='Delete'/>
                        </form></td>
                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='edit_id' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='show_edit_form'/>
                            <input type='submit' value='Edit'/>
                        </form>
                    </td>
                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='mark' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='mark_complete'/>
                            <input type='submit' value='Mark Complete'/>
                        </form>
                    </td>
                </tr>   
            <?php endforeach; ?>

        </tr>
    <?php endif; ?>
</table>
<form method='post' action='index.php'>
    <input type='hidden' name= 'action' value='show_add_form'/></br>
    <input type="submit" value="Add" /></br>
</form>
</body>
</html>
