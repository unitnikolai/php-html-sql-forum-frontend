<?php

$serverName = 'DESKTOP-0A4HGI6';
$database = 'BikeStores';
// $uid = 'User';
// $password = 'Pa$$w0rd';


$connection = [
"Database" => $database,
// "Uid" => $uid,
// "PWD" => $password,
// "TrustServerCertificate" => true,
];

$conn = sqlsrv_connect($serverName, $connection);
if(!$conn){
    echo "Connection failed";
    die(print_r(sqlsrv_errors(),true));
}else{
    echo "Connection Successful";
    
}

?>