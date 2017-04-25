<?php
function deleteTodoItem($user_id,$todo_id){
  global $db;
  $query= 'delete from todos where id=:todo_id and user_id=:user_id';

   $statement = $db-> prepare($query);
     $statement->bindValue(':user_id',$user_id);
       $statement->bindValue(':todo_id',$todo_id);
       $statement->execute();
       $statement->closeCursor();

}
function addTodoItem($user_id, $todo_text){
 global $db;
 $query = 'insert into user_todo_items(email_id,todo_item) values (:userid,:todo_text)';
  $statement = $db-> prepare($query);
  $statement->bindValue(':userid',$user_id);
  $statement->bindValue(':todo_text',$todo_text);
  $statement->execute();
  $statement->closeCursor();

}
function getTodoItems($emailId){
 global $db;
 $query = 'select * from user_todo_items where email_id= :emailId';
 $statement = $db-> prepare($query);
 $statement->bindValue(':emailId',$emailId);
 $statement->execute();
 $result=$statement->fetchAll();
 $statement->closeCursor();
 return $result;
}

function createUser($email,$firstname,$lastname,$pass,$phone,$birthday,$gender){   
 global $db;
 $query = 'select * from user_info where email_id = :email';
$statement = $db-> prepare($query);
$statement->bindValue(':email',$email);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
if($count > 0)
{
return true;
}else{
$query = 'insert into user_info (email_id,first_name,last_name,password,phone_no,birthday,gender) values (:email,:fname,'
        . ':lname,:pass,:phone,:birthday,:gender)';
$statement = $db-> prepare($query);
$statement->bindValue(':email',$email);
$statement->bindValue(':fname',$firstname);
$statement->bindValue(':lname',$lastname);
$statement->bindValue(':pass',$pass);
$statement->bindValue(':phone',$phone);
$statement->bindValue(':birthday',$birthday);
$statement->bindValue(':gender',$gender);
$statement->execute();
$statement->closeCursor();
return false;
}

}
function isUserValid($username,$password,$firstname,$lastname){
  global $db;
  $query = 'select * from user_info where email_id = :name and password = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->bindValue(':pass',$password);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count=$statement->rowCount();
  if($count == 1) {
   setcookie('firstname',$result[0]['first_name']);
   setcookie('lastname',$result[0]['last_name']);   
   setcookie('my_id',$result[0]['id']);
   setcookie('islogged',true);
   return true;
 }else{
 unset($_COOKIE['firstname']);
 unset($_COOKIE['lastname']);
 setcookie('firstname',false);
 setcookie('lastname',false);
 setcookie('islogged',false);
 setcookie('my_id',false);
  setcookie('id',false);
 return false;
 }
 }
 
 function isEmailValid($username){
  global $db;
  $query = 'select * from user_info where email_id = :name';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count=$statement->rowCount();
  if($count == 1) {
   return true;
 }else{
 return false;
 }
 }
 
 ?>
