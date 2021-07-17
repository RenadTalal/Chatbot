<?php
$conn = mysqli_connect('localhost','root','','MoveDB');




if(isset($_REQUEST['Forward_M'])){
    $my_query = "INSERT INTO Movements (Forward_M) VALUES ('F');";
    $result = $conn->query($my_query);
    echo "F";
}
   
if(isset($_POST['Backward_M'])){
    $my_query = "INSERT INTO Movements (Backward_M) VALUES ('B')";
    $result = mysqli_query($conn, $my_query);
        echo "B";}

if(isset($_POST['Right_M'])){
    $my_query = "INSERT INTO Movements (Right_M) VALUES ('R')";
    $result = mysqli_query($conn, $my_query);
        echo "R";}
    
if(isset($_POST['Left_M'])){
    $my_query = "INSERT INTO Movements (Left_M) VALUES ('L')";
    $result = mysqli_query($conn, $my_query);
        echo "L";}

if(isset($_POST['Stop_M'])){
        $my_query = "INSERT INTO Movements (Stop_M) VALUES ('S')";
        $result = mysqli_query($conn, $my_query);
             echo "S";

}


mysqli_close($conn);
?>