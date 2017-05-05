<?php
require('header.php');
?>
<html>
<head>
  <style>
  .header{
  text-align:center;
  margin-top:30px;
  }
  body{
  background-image: url('images/image1.jpg');
  font-family:calibri;
  }
  table{
  margin-left:auto; 
    margin-right:auto;
    margin-top:auto;
    }
    
    .btn{
    background-color: #3b5998;
     border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  color: #eee;
  font-weight: bold;
  margin-top:1em;
  margin-bottom: 0.5em;
  width: auto;
  margin-left:10px;
  height:30px;
    }
    
    .inpt{
    height: 30px;
    border-radius: 0px 3px 3px 0px;
    color: black;
    margin-top: 1em;
    margin-bottom: 1em;
    padding: 0 10px;
    width: 200px;
    font-size: 14px;
    }
    label{
    font-weight:bold;
    }
  </style>
</head>
<body>
    <h1 class="header">Edit Item</h1>
    <form action="index.php" method="post" id="edit_item_form">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id_edit" value="<?php echo $editId; ?>">
      <table>
      <tr>
       <td> <label>Item name:</label></td>
        <td><input class="inpt" type="text" name="itemname" /></td>
        
      </tr>
      <tr><td>  <label>Description:</label></td>
       <td> <input class="inpt" type="text" name="description" /></td>
        </tr>

       <tr><td> <label>Due Date:</label></td>
       <td>  <input class="inpt" type="date" name="date" /></td>
        

       <tr><td> <label>Due Time:</label></td>
       <td>  <input class="inpt" type="time" name="time" /></td></tr>
        

        <label>&nbsp;</label>
       <tr><td> <input class="btn" type="submit" value="Edit Item" /></td>
       <td> <a href="javascript:history.go(-1)"><button class="btn" type="button">Cancel</button></a></td></tr>
        <br>
        </table>
    </form>
    

</body>
</html>