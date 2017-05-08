<?php

require('../model/db_connect.php');
require('../model/db.php');

$action = filter_input(INPUT_POST, "action");
if ($action == NULL) {
    $action = "show_login_page";
}
if ($action == "show_login_page") {
    include('../login.php');
} else if ($action == 'check_login') {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $checkemail = isEmailValid($username);
    if ($checkemail == true) {
        $suc = isUserValid($username, $password);
        if ($suc == true) {
            $result = getTodoItems($username);
            include("../view/list.php");
        } else {
            header("Location: ../login.php?error2=1");
        }
    } else {
       
        header("Location: ../login.php?error=1");
    }
} else if ($action == 'registrar') {
    $email = filter_input(INPUT_POST, 'email');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script language="javascript">';
        echo 'alert("Please enter a valid Email Address")';
        echo '</script>';
        include('../view/register.php');
    } else if (isset($email)) {
        $firstname = filter_input(INPUT_POST, 'firstname');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $pass = filter_input(INPUT_POST, 'password');
        $phone = filter_input(INPUT_POST, 'phone_num');
        $birthday = filter_input(INPUT_POST, 'birthday');
        $gender = filter_input(INPUT_POST, 'gender');

        $exit = createUser($email, $firstname, $lastname, $pass, $phone, $birthday, $gender);
        if ($exit == true) {
            header("Location: ../view/register.php?emailerror=1");
            //include('../view/user_exit.php');
        } else {
            header("Location: ../login.php?success=1");
            //include("../login.php");
        }
    }
} else if ($action == 'show_add_form') {
    include('../view/add_item.php');
} else if ($action == 'edit') {
    $email = $_COOKIE['userid'];
    $itemname = filter_input(INPUT_POST, 'itemname');
    $description = filter_input(INPUT_POST, 'description');
    $date = filter_input(INPUT_POST, 'date');
    $time = filter_input(INPUT_POST, 'time');
    $id = filter_input(INPUT_POST, 'id_edit');
    if (isset($id)) {
        editTodoItem($email, $itemname, $description, $date, $time, $id);
    }
    $result = getTodoItems($_COOKIE['userid']);
    include('../view/list.php');
} else if ($action == 'delete') {
    if (isset($_POST['item_id'])) {
        $selected = $_POST['item_id'];
        deleteTodoItem($_COOKIE['userid'], $selected);
    }
    $result = getTodoItems($_COOKIE['userid']);
    include('../view/list.php');
} else if ($action == 'show_edit_form') {
    $editId = filter_input(INPUT_POST, 'edit_id');
    $itemname = filter_input(INPUT_POST, 'itemname');
    $des = filter_input(INPUT_POST, 'des');
    $date = filter_input(INPUT_POST, 'date');
    $time = filter_input(INPUT_POST, 'time');
    include('../view/edit_item.php');
} else if ($action == 'redirect') {
    $email = $_COOKIE['userid'];
    $result = getTodoItems($_COOKIE['userid']);
    include('../view/list.php');
} else if ($action == 'mark_complete') {
    $email = $_COOKIE['userid'];
    $selected = $_POST['mark'];
    if (isset($selected)) {
        updateTodoItem($email, $selected);
    }
    $result = getTodoItems($_COOKIE['userid']);
    include('../view/list.php');
} else if ($action == 'add') {
    $email = $_COOKIE['userid'];
    $itemname = filter_input(INPUT_POST, 'itemname');
    $description = filter_input(INPUT_POST, 'description');
    $date = filter_input(INPUT_POST, 'date');
    $time = filter_input(INPUT_POST, 'time');
    addTodoItem($email, $itemname, $description, $date, $time);
    $result = getTodoItems($_COOKIE['userid']);
    include('../view/list.php');
}
?>
