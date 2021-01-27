<?php session_start();
include("db.php");

if(isset($_POST['service_id'])){
    $info=mysqli_query($conn,"SELECT * FROM service_list WHERE service='$_POST[service_id]'");
    $mdata='<option disabled selected value>----</option>';
    while($row=mysqli_fetch_array($info)){
        $mdata.= "<option value='".$row['service_list_id']."'>".$row['name']."</option>";
    }
    echo $mdata;
}elseif(isset($_POST['service_list_id'])){
    $info=mysqli_fetch_array(mysqli_query($conn,"SELECT type FROM service_list WHERE service_list_id='$_POST[service_list_id]'"));
   echo $info['type'];
}
?>