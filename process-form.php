<?php
print($_POST);

include("connection.php");

function getData(){
    $data = array();
    $data[0] =$_POST['txtFirst'];
    $data[1] =$_POST['txtLast'];
    $data[2] =$_POST['txtEmail'];

    return $data;

}
if(isset($_POST['insert'])){
    $column = getData();
    $insert = "INSERT INTO sales.customers 
    (first_name, last_name, email) VALUES ('$column[0]', '$column[1]', '$column[2]')";
    $result = sqlsrv_query($conn, $insert);
    if($result){
        echo "Inserted";
    }
}

?>