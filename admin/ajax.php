<?php session_start();
include("db.php");

if(isset($_POST['load_state'])){
    $info=mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$_POST[load_state]'");
    $mdata='<option disabled selected value>--Select your City--</option>';
    while($row=mysqli_fetch_array($info)){
        $mdata.= "<option value='".$row['id']."'>".$row['name']."</option>";
    }
    echo $mdata;
}elseif(isset($_POST['qry_from'])){
   if($_POST['qry_from']=='franchise'){
       $condition="franchise_status";
       $table="franchise";
       $name='franchise_name';
       $id='franchise_id';
   }elseif($_POST['qry_from']=='customer'){
       $condition="customer_status";
       $table="customers";
       $name='customer_name';
       $id='customer_id';
   }elseif($_POST['qry_from']=='employee'){
$condition="em_status";
       $table="employee_list";
       $name='em_name';
       $id='em_id';
   }
    
if($_POST['qry_from']=='employee1'){
    $mdata="emp";
}else{
//     $mdata="SELECT * FROM ".$table." WHERE ".$condition."='1'";
     $mdata='<option disabled selected value>--Select--</option>';
    $info=mysqli_query($conn,"SELECT * FROM ".$table." WHERE ".$condition."='1'");
    while($row=mysqli_fetch_array($info)){
        $mdata.='<option value="'.$row[$id].'">'.$row[$name].'</option>';
    }
}
    echo $mdata;
}elseif(isset($_POST['meeting_with'])){
     $mdata='<option disabled selected value>--Select--</option>';
    if($_POST['meeting_with']=='corporate'){
       $info=mysqli_query($conn,"SELECT * FROM employees LEFT JOIN corporate_department ON employees.emp_department = corporate_department.department_id");
        while($row=mysqli_fetch_array($info)){
        $mdata.='<option value="'.$row['emp_id'].'">'.$row['emp_name'].'('.$row['department_name'].')</option>';
    }    
    }elseif($_POST['meeting_with']=='admin'){
        $table="";
        $condition="admin_status";
        $id="admin_id";
        $name="admin_name";
         $info=mysqli_query($conn,"SELECT * FROM admin_profile WHERE admin_status='1'");
        while($row=mysqli_fetch_array($info)){
        $mdata.='<option value="'.$row[$id].'">'.$row[$name].'</option>';
    }
    }
    
    echo $mdata;
}elseif(isset($_POST['proj_id'])){
    $mdata='<option disabled selected value>--Select--</option>';
        $info1=mysqli_fetch_array(mysqli_query($conn,"SELECT proj_handler FROM projects WHERE task_id='".$_POST['proj_id']."'"));
    $info=mysqli_query($conn,"SELECT * FROM employees WHERE emp_id IN (".$info1['proj_handler'].")");
        while($row=mysqli_fetch_array($info)){
        $mdata.='<option value="'.$row['emp_id'].'">'.$row['emp_name'].'</option>';
}
    echo $mdata;
}

?>