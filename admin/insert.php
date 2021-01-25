<?php session_start();
include("db.php");
if(isset($_POST['insert_team'])){

  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
    $file_name = $_FILES['photo']['name'];
    $file_size =$_FILES['photo']['size'];
    $file_tmp =$_FILES['photo']['tmp_name'];
    $file_type=$_FILES['photo']['type'];
      $tmp_explode=explode('.',$file_name);
    $file_ext=strtolower(end($tmp_explode));
    $extensions= array("jpeg","jpg","png");
  if(in_array($file_ext,$extensions)=== false){
       header("Location:add-team.php?msg=File type not support");
      exit();
    }elseif($file_size > 2097152){
      header("Location:add-team.php?msg=File size should be lessthan 2MB");
      exit();
    }else{
      $rand=rand(0,1000);
      $filename="ithinkcreation-".$rand.'-'.$file_name;
      $filepath="../img/team/".$filename;
       move_uploaded_file($file_tmp,$filepath);
  }
  }else{
      $filename="noimg.png";
  }
  if(isset($_POST['facebook'])){
    $facebook=$_POST['facebook'];
  }else{
    $facebook='';
  }
  if(isset($_POST['youtube'])){
    $youtube=$_POST['youtube'];
  }else{
    $youtube='';
  }
  if(isset($_POST['pinterest'])){
    $pinterest=$_POST['pinterest'];
  }else{
    $pinterest='';
  }
  if(isset($_POST['instagram'])){
    $instagram=$_POST['instagram'];
  }else{
    $instagram='';
  }
  if(isset($_POST['linkedin'])){
    $linkedin=$_POST['linkedin'];
  }else{
    $linkedin='';
  }
  if(isset($_POST['twitter'])){
    $twitter=$_POST['twitter'];
  }else{
    $twitter='';
  }

$desc=mysqli_real_escape_string($conn,$_POST['description']);
  $ins=mysqli_query($conn,"INSERT INTO team (name,designation,image,description,status,facebook,youtube,pinterest,instagram,linkedin,twitter) VALUES('$_POST[name]','$_POST[designation]','$filename','$desc','$_POST[status]','$facebook','$youtube','$pinterest','$instagram','$linkedin','$twitter')");
  if($ins){
      header("Location:add-team.php?msg=Detail added successfully");
      exit();
  }else{
      header("Location:add-team.php?msg=Failed to update detail");
      exit();
  }
}elseif(isset($_POST['insert_testimonial'])){

  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
    $file_name = $_FILES['photo']['name'];
    $file_size =$_FILES['photo']['size'];
    $file_tmp =$_FILES['photo']['tmp_name'];
    $file_type=$_FILES['photo']['type'];
      $tmp_explode=explode('.',$file_name);
    $file_ext=strtolower(end($tmp_explode));
    $extensions= array("jpeg","jpg","png");
  if(in_array($file_ext,$extensions)=== false){
       header("Location:add-testimonial.php?msg=File type not support");
      exit();
    }elseif($file_size > 2097152){
      header("Location:add-testimonial.php?msg=File size should be lessthan 2MB");
      exit();
    }else{
      $rand=rand(0,1000);
      $filename="ithink-".$rand.'-'.$file_name;
      $filepath="../img/testimonial/".$filename;
       move_uploaded_file($file_tmp,$filepath);
  }
  }else{
      $filename="noimg.png";
  }
//    echo $filename;

$desc=mysqli_real_escape_string($conn,$_POST['description']);
  $ins=mysqli_query($conn,"INSERT INTO testimonial (name,designation,image,description,status) VALUES('$_POST[name]','$_POST[designation]','$filename','$desc','$_POST[status]')");
  if($ins){
      header("Location:add-testimonial.php?msg=Testimonial created successfully");
      exit();
  }else{
      header("Location:add-testimonial.php?msg=Failed to create Testimonial");
      exit();
  }
}elseif(isset($_POST['insert_video_testimonial'])){


  $ins=mysqli_query($conn,"INSERT INTO video_testimonial (link,status) VALUES('$_POST[link]','1')");
                    if($ins){
      header("Location:add-video-testimonial.php?msg=Section created successfully");
      exit();
  }else{
      header("Location:add-video-testimonial.php?msg=Failed to create Section");
      exit();
  }
}elseif(isset($_POST['btn_blog'])){
  $title=mysqli_real_escape_string($conn,$_POST['title']);
  $blog=mysqli_real_escape_string($conn,$_POST['blog']);
  $short_blog=mysqli_real_escape_string($conn,$_POST['short_blog']);
  $slug=mysqli_real_escape_string($conn,$_POST['slug']);
  $TotalUploadedFiles=count($_FILES['file_img']['name']);
      if($_FILES['file_img']['name'][0]!='')
{
    for($i = 0; $i < $TotalUploadedFiles; $i++){
      $filetmp = $_FILES["file_img"]["tmp_name"][$i];
    $filename = $_FILES["file_img"]["name"][$i];
    $filetype = $_FILES["file_img"]["type"][$i];
    $filepath = "../img/blogs/".$filename;
  $filepath2 = "img/blogs/".$filename;
  move_uploaded_file($filetmp,$filepath);
 }
}else{
    $filepath2='';
  }
   $ins=mysqli_query($conn,"insert into blog(path,status,time,title,blog,shortblog,slug) values('$filepath2','active',NOW(),'$title','$blog','$short_blog','$slug')");
    if($ins){
     echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.location.href='blogs.php?success=Blogs created successfully';
   </SCRIPT>");  
   }else{
     echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='blogs.php?success=Error on create blogs';
    </SCRIPT>");
   }
  

}

if(isset($_POST['insert_service_list'])){
    $ins=mysqli_query($conn,"INSERT INTO services (name,description,status,date) VALUES('$_POST[name]','$_POST[description]',NOW())");
    if($ins){
        header("Location:add-services.php?msg=Services created successfully");
        exit();
    }else{
        header("Location:add-services.php?msg=Failed to create Services");
        exit();
    }
}elseif(isset($_POST['insert_process'])){
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-process.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-process.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="invicts-".$rand.'-'.$file_name;
        $filepath="../images/process/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
    $ins=mysqli_query($conn,"INSERT INTO process (title,description,status,image,date) VALUES('$_POST[title]','$_POST[description]','$_POST[status]','$filename',NOW())");
    if($ins){
        header("Location:add-process.php?msg=Process created successfully");
        exit();
    }else{
        header("Location:add-process.php?msg=Failed to create Process");
        exit();
    }
}elseif(isset($_POST['insert_portfolio'])){
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-portfolio.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-portfolio.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="invicts-".$rand.'-'.$file_name;
        $filepath="../images/portfolio/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
    $ins=mysqli_query($conn,"INSERT INTO portfolio (title,description,status,image,date,link) VALUES('$_POST[title]','$_POST[description]','$_POST[status]','$filename',NOW(),'$_POST[link]')");
    if($ins){
        header("Location:add-portfolio.php?msg=Portfolio created successfully");
        exit();
    }else{
        header("Location:add-portfolio.php?msg=Failed to create Portfolio");
        exit();
    }
}elseif(isset($_POST['insert_package'])){
   $features=array_combine($_POST['fea_name'], $_POST['featuresstatus']);
   $feature=json_encode($features);
   $ins=mysqli_query($conn,"INSERT INTO packages (title,subtitle,status,package_info,date) VALUES ('$_POST[title]','$_POST[subtitile]','$_POST[status]','$feature',NOW())");
   if($ins){
    header("Location:add-packages.php?msg=Package created successfully");
    exit();
   }else{
    header("Location:add-packages.php?msg=Failed to create Package");
    exit();
   }
}
elseif(isset($_POST['insert_homesec2'])){
    $ins=mysqli_query($conn,"INSERT INTO home_section2 (title,description,status) VALUES('$_POST[title]','$_POST[description]','$_POST[status]')");    
    if($ins){
        header("Location:add-home-section2.php?msg=section created successfully");
        exit();
    }else{
        header("Location:add-home-section2.php?msg=Failed to create section");
        exit();
    }
    
}elseif(isset($_POST['insert_client'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:clients.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:clients.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="invicts-".$rand.'-'.$file_name;
        $filepath="../images/clients/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    $q=mysqli_query($conn,"INSERT INTO clients SET path='$filename'");
    if($q){

      header('Location:clients.php?msg=detail updated successfully');
      exit();
  }else{
      header('Location:clients.php?msg=Failed to update detail');
  }
    }
    
}elseif(isset($_POST['insert_department'])){
    $ins=mysqli_query($conn,"INSERT INTO corporate_department (department_name,department_status,department_create_date) VALUES('$_POST[department_name]','$_POST[status]',NOW())");
    if($ins){
        header("Location:department.php?msg=Department created successfully");
        exit();
    }else{
        header("Location:department.php?msg=Failed to create department");
        exit();
    }
}elseif(isset($_POST['insert_employees'])){
    print_r($_POST);

    
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-employee-information.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-employee-information.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="employee-".$rand.'-'.$file_name;
        $filepath=IMGPATH.$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }
    
    $ins=mysqli_query($conn,"INSERT INTO employee_list (em_code,em_name,em_email,em_mobile,em_emergency_mobile,em_image,em_dob,em_doj,em_address,em_city,em_state,em_postcode,em_country) VALUES('$_POST[employee_code]','$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[emergency_mobile]','$filename','$_POST[dob]','$_POST[doj]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[postcode]','$_POST[country]')");
    if($ins){
        header("Location:add-employee-information.php?msg=Employee created successfully");
        exit();
    }else{
        header("Location:add-employee-information.php?msg=Failed to create Employee");
        exit();
    }
    
}elseif(isset($_POST['task_rep'])){
//    print_r($_POST);
    $inn=mysqli_fetch_array(mysqli_query($conn,"SELECT proj_comment_reply FROM project_task WHERE project_task_id='$_POST[task_id]'"));
    if($inn['proj_comment_reply']!=''){
        $mm=array("reply" => $_POST['task_reply'], "replytime" => date('Y-m-d H:i:s'),"reply_from" =>$_SESSION['admin_session_id']);
//        print_r($mm);
        $exist=json_decode($inn['proj_comment_reply'],true);
        
        $exist[]=$mm;
//        print_r($exist);
        $rply=json_encode($exist);
         $ins=mysqli_query($conn,"UPDATE project_task SET proj_task_status='$_POST[task_status]',proj_comment_reply='$rply' WHERE project_task_id='$_POST[task_id]'");
    }else{
        $myArray = array();
        $myArray[] = array("reply" => $_POST['task_reply'], "replytime" => date('Y-m-d H:i:s'),"reply_from" =>$_SESSION['admin_session_id'] );
        $rply=json_encode($myArray);
        $ins=mysqli_query($conn,"UPDATE project_task SET proj_task_status='$_POST[task_status]',proj_comment_reply='$rply' WHERE project_task_id='$_POST[task_id]'");
    }
     if($ins){
        header("Location:view-task-list.php?id=13&msg=Employee created successfully");
        exit();
    }else{
        header("Location:view-task-list.php?id=13&msg=Failed to create Employee");
        exit();
    }
    
}

?>


