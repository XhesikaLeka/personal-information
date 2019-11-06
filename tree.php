<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

function getCategory($sid){
    global $conn;
    $sql = "SELECT * FROM bank WHERE direct_supervisor_id='".$sid."' ORDER BY name";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0)
    {
        echo "<ul>";
        while ($row = mysqli_fetch_object($result))
        {
            echo "<li>".$row->name."</li>";
            getCategory($row->id);     
        }
        echo "</ul>";
    }
}


//Set Parent id
$sid = 0;
getCategory($sid);

?>