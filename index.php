<?php
require('db_connect.php');
require('db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
 $action = "show_login_page";
}
if($action == "show_login_page")
{
 include('login.php');
}else if($action=='check_login'){
$username = $_POST['email'];
$password = $_POST['password'];
$checkemail = isEmailValid($username);
if($checkemail == true) {
$suc = isUserValid($username,$password);
if($suc == true)
{
$result = getTodoItems($username);
include("list.php");

}else{
 header("Location: badInfo.php");
}
}else{
 echo "Email doesnt exist.";
}
}else if($action == 'registrar')
{
  // echo "we want to create a registrar";
  $email = filter_input(INPUT_POST, 'email');
  if(isset($email))
  {
     $firstname = filter_input(INPUT_POST, 'firstname');
     $lastname = filter_input(INPUT_POST, 'lastname');
     $pass = filter_input(INPUT_POST, 'password');
     $phone = filter_input(INPUT_POST, 'phone_num');
     $birthday = filter_input(INPUT_POST, 'birthday');
     $gender = filter_input(INPUT_POST, 'gender');
    
     $exit = createUser($email,$firstname,$lastname,$pass,$phone,$birthday,$gender);
    if($exit == true)
    {
   include('user_exit.php');
    }else{
     header("Location: login.php");
    }

  }
}else if($action == 'show_add_form') {
  include('add_item.php');
}else if($action == 'add')
{
   $email = $_COOKIE['userid'];
   $itemname = filter_input(INPUT_POST, 'itemname');
   $description = filter_input(INPUT_POST, 'description');
   $date = filter_input(INPUT_POST, 'date');
   $time = filter_input(INPUT_POST, 'time');
   addTodoItem($email,$itemname, $description, $date,$time);
   include('list.php');
}else if($action == 'delete'){
 if(isset($_POST['item_id'])){
 $selected = $_POST['item_id'];
 deleteTodoItem($_COOKIE['my_id'],$selected);

 }
 $result = getTodoItems($_COOKIE['my_id']);
 include('list.php');
}
?>
