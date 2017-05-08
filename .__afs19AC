<?php
require('header.php');
$array_complete = array();
$array_todo = array();
foreach ($result as $res) {

    if ($res['complete'] == 1) {
        $array_complete[] = $res;
    } else {
        $array_todo[] = $res;
    }
}
$firstname_cookie = getcookie('firstname');
$lastname_cookie = getcookie('lastname');
if($firstname_cookie=="" || $lastname_cookie==""){
$firstname_cookie = $_COOKIE['firstname'];
$lastname_cookie = $_COOKIE['lastname'];
}
echo "<h1 style='text-align:center;'> To do list system </h1>";

?>

<html>
<head>
 <style>
  body{
  background-image: url('images/image1.jpg');
  font-family:calibri;
  }
 .button-style{
 border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  color: #eee;
  font-weight: bold;
  margin-bottom: 0.5em;
  width: auto;
  margin-left:10px;
  height:30px;
  }
  table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: auto;
    margin-left:100px;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #d8dfea}

th {
    background-color: #3b5998;
    color: white;
}
  </style>
</head>
    <body>
    <h4 style='text-align:center;padding-right:80px;'> <?php echo "Welcome, " . $firstname_cookie . " " . $lastname_cookie . '</br>'; ?> </h4>
        <table class="table-style">
            <?php if (count($array_complete) > 0): ?>
                <h3 style="margin-left:100px;">Below are your completed items: </h2>
                <tr>
                    <th>To-do Item</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th class="right">Time</th>
                    
                </tr>
                <tr>
                    <?php foreach ($array_complete as $res): ?>

                    <tr>
                        <td><?php echo $res['itemname']; ?></td>
                        <td><?php echo $res['description']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td class="right"><?php echo $res['time']; ?></td>

                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='item_id' value='<?php echo $res['id']; ?>'/>
                                <input type='hidden' name='action' value='delete'/>
                                <input class="button-style"  style="background-color: #3b5998;" type='submit' value='Delete'/>
                            </form></td>
                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='edit_id' value='<?php echo $res['id']; ?>'/>
                                <input type='hidden' name='action' value='show_edit_form'/>
                                <input class="button-style"  style="background-color: #3b5998;" type='submit' value='Edit'/>
                            </form>
                        </td>

                    </tr>   
                <?php endforeach; ?>

            </tr>
        <?php endif; ?>
    </table>
<br>
    <table class="table-style">
        <?php if (count($array_todo) > 0): ?>
            <h3 style="margin-left:100px;"> Below are your to-do items: </h2>
            <tr>
                <th>To-do Item</th>
                <th>Description</th>
                <th>Date</th>
                <th class="right">Time</th>
                
            </tr>
            <tr>
                <?php foreach ($array_todo as $res): ?>

                <tr>
                    <td><?php echo $res['itemname']; ?></td>
                    <td><?php echo $res['description']; ?></td>
                    <td><?php echo $res['date']; ?></td>
                    <td class="right"><?php echo $res['time']; ?></td>

                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='item_id' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='delete'/>
                            <input class="button-style" style=" background-color: #3b5998;" type='submit' value='Delete'/>
                        </form></td>
                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='edit_id' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='show_edit_form'/>
                            <input class="button-style" style=" background-color: #3b5998;" type='submit' value='Edit'/>
                        </form>
                    </td>
                    <td>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='mark' value='<?php echo $res['id']; ?>'/>
                            <input type='hidden' name='action' value='mark_complete'/>
                            <input class="button-style" style=" background-color: #3b5998;" type='submit' value='Mark Complete'/>
                        </form>
                    </td>
                </tr>   
            <?php endforeach; ?>

        </tr>
    <?php endif; ?>
</table>
<form method='post' action='index.php'>
    <input type='hidden' name= 'action' value='show_add_form'/></br>
    <input class="button-style" style=" background-color: #ea4c88;margin-left: 500px;width:200px;height:40px" type="submit" value="Add" /></br>
</form>
</body>
</html>
