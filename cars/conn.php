<?php

$conn= new mysqli('localhost', 'root', '', 'car');
if(isset($_POST['name']) && isset($_POST['Transportation']) &&isset($_POST['phone'])){



$name= $_POST['name'];
$Transportation = $_POST['Transportation'];
$phone= $_POST['phone'];



mysqli_query($conn,"insert into products (name,Transportation,phone)
                     value('$name','$Transportation','$phone')");
echo "your data successefully";
}

?>