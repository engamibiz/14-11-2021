<?php
if(isset($_GET['id']) && isset($_GET['completed'])){
$id= $_GET['id'];
$completed = $_GET['completed'];
include 'connect.php';
if($completed == 1){
$query=$conn->prepare("UPDATE tasks SET completed = 0 WHERE id ='$id'");
$query->execute();
}else{
    $query=$conn->prepare("UPDATE tasks SET completed = 1 WHERE id ='$id'");
    $query->execute();
}
    header("Location:todo.php");
}else{
    header("Location:todo.php");
}