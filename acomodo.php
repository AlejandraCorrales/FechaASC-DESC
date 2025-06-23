<?php
header("Content-Type:application/json");
$method = $_SERVER['REQUEST_METHOD'];
header("Content-Type: application/json");


$conn = new mysqli("localhost","root","","acom");
if ($conn-> connect_error){
    die(json_encode(["error"=>"conexion fallida"]));

}
$orden = (isset($_GET['orden']) && strtolower($_GET['orden']) === 'desc') ? 'DESC' : 'ASC';


    $sql = "SELECT * FROM date ORDER BY year $orden, month $orden, day $orden";
    $result = $conn->query($sql);


    $data = [];
    if($result && $result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
}

    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    $conn->close();

