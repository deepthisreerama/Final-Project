<?php
require('header.php');
?>
<html>
<head>
  <link rel="stylesheet" href="mainstyle.css">
</head>
<body>
    <h1 class="header">Add an Item</h1>
    <form action="redirect.php" method="post" id="add_item_form">
        <input type="hidden" name="action" value="add">
         <table>
         <tr>
      <td>  <label>Item name:</label></td>
        <td><input class="inpt" type="text" name="itemname" /></td>
        </tr>

      <tr> <td> <label>Description:</label></td>
      <td>  <input class="inpt" type="text" name="description" /></td></tr>
        

     <tr><td>   <label>Due Date:</label></td>
        <td><input class="inpt" type="date" name="date" /></td>
        </tr>

      <tr><td>  <label>Due Time:</label></td>
       <td> <input class="inpt" type="time" name="time" /></td>
       </td>

        <label>&nbsp;</label>
        <tr><td><input class="btn" type="submit" value="Add Item" /></td>
        <td> <a href="javascript:history.go(-1)"><button class="btn" type="button">Cancel</button></a></td></tr>
        <br>
        </table>
    </form>

</body>
</html>