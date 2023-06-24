<?php
session_start();
  require_once("dbconfig.php");

  if (!isset($_SESSION['userid']) || trim($_SESSION['userid']) == '') {
    header("location:signin.php");
  }
  $sql ="SELECT * FROM users WHERE id='".$_SESSION['userid']."'";
  $query=$dbh->prepare($sql);
  $query->execute();
  $row=$query->fetchAll(PDO::FETCH_OBJ);

  if ($query->rowCount() >0) {
      foreach($row as $userresult);
  }
?>