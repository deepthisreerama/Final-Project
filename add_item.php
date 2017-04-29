
<main>
    <h1>Add an Item</h1>
    <form action="redirect.php" method="post" id="add_item_form">
        <input type="hidden" name="action" value="add">
         
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
        <input type="submit" value="Add Item" />
        <br>
    </form>

</main>