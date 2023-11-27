<?php

  function Insert_Data_User($email, $fullName ,$password){
    $sql = "INSERT INTO `user`( `email`, `password`, `full_name`) VALUES ('$email','$password','$fullName')";
    pdo_execute($sql);
  }

  function Check_Data_User($email, $password){
    $sql = "SELECT *  FROM user WHERE `email` = '$email' AND `password` = '$password' ";
    $acc = pdo_query_one($sql);
 return $acc;
  }

?>