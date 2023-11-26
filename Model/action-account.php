<?php

  function Insert_Data_User($email, $fullName ,$password){
    $sql = "INSERT INTO `user`( `email`, `password`, `full_name`) VALUES ('$email','$password','$fullName')";
    pdo_execute($sql);
  }

  function Check_Data_User($email, $password){
    $sql = "SELECT `id_user`, `full_name`,`email`, `password`  FROM `user` WHERE `email` = '$email' AND `password` = '$password' ";
    $list_one_data_user = pdo_query_one($sql);
    return $list_one_data_user;
  }

?>