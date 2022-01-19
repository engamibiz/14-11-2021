<?php
include 'connect.php';
$query=$conn->prepare("SELECT * FROM tasks ORDER BY id DESC");
$query->execute();
$tasks=$query->fetchAll();
