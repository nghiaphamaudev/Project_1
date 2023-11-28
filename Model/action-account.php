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
  function Load_All_Data_Acc(){
    $sql = "SELECT * FROM `user`";
    $list_acc = pdo_query($sql);
    return $list_acc;
}
function Delete_Data_Acc($id){
  $sql = "DELETE FROM `user` WHERE id_user =".$id;
  pdo_query($sql);
}
function Load_One_Data_Acc($id){
  $sql = "SELECT * FROM `user` WHERE `id_user`=".$id;
  $list_one_acc = pdo_query_one($sql);
  return $list_one_acc;
}
function Update_Data_Acc($id, $email,$password,$full_name, $role){
  $sql = "UPDATE `user` SET `email`= '$email',`password`= '$password',`full_name`= '$full_name',`role`= '$role' WHERE `id_user` = ".$id;
  pdo_query($sql);
}

function Add_Data_Acc($email,$password,$full_name,$role){
  $sql = "INSERT INTO `user`(`email`, `password`, `full_name`,`role`) VALUES ('$email','$password','$full_name','$role')";
  pdo_execute($sql);
}
?>