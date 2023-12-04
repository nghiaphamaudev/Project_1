<?php
  function Load_All_Data_confirm(){
    $sql = "SELECT * FROM `bill`";
    $list_bill = pdo_query($sql);
    return $list_bill;
}
  function Load_One_Data_confirm($id){
    $sql = "SELECT * FROM `bill` WHERE `id_bill`=".$id;
    $list_one_bill = pdo_query_one($sql);
    return $list_one_bill;
  }
  function Update_Data_confirm($id,$id_state){
    $sql = "UPDATE `bill` SET `state`= '$id_state' WHERE `id_bill` = ".$id;
    pdo_query($sql);
  }
?>