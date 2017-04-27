<main>
    <h1>Edit Item</h1>
    <form action="index.php" method="post" id="edit_item_form">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id_edit" value="<?php echo $editId; ?>">
        <label>Item name:</label>
        <input type="text" name="itemname" />
        <br>

        <label>Description:</label>
        <input type="text" name="description" />
        <br>

        <label>Due Date:</label>
        <input type="date" name="date" />
        <br>

        <label>Due Time:</label>
        <input type="time" name="time" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Edit Item" />
        <a href="javascript:history.go(-1)"><button type="button">Cancel</button></a>
        <br>
    </form>
    

</main>