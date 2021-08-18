<?php

$con = new mysqli("localhost","root","","shaquil-eat-meat");
$st=$con->prepare("select * from products where category_id=?");
$st->bind_param("i", $_GET["category_id"]);
$st->execute();
$rs=$st->get_result();
$arr = array();

while ($row=$rs->fetch_assoc()){
    array_push($arr, $row);
}
echo json_encode($arr);

?>
