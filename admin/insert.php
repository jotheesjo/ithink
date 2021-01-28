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

if(isset($_POST['insert_service'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
    $file_name = $_FILES['photo']['name'];
    $file_size =$_FILES['photo']['size'];
    $file_tmp =$_FILES['photo']['tmp_name'];
    $file_type=$_FILES['photo']['type'];
      $tmp_explode=explode('.',$file_name);
    $file_ext=strtolower(end($tmp_explode));
    $extensions= array("jpeg","jpg","png");
  if(in_array($file_ext,$extensions)=== false){
       header("Location:add-services.php?msg=File type not support");
      exit();
    }elseif($file_size > 2097152){
      header("Location:add-services.php?msg=File size should be lessthan 2MB");
      exit();
    }else{
      $rand=rand(0,1000);
      $filename="ithink-".$rand.'-'.$file_name;
      $filepath="../img/services/".$filename;
       move_uploaded_file($file_tmp,$filepath);
  }
  }else{
      $filename="noimg.png";
  }

    $ins=mysqli_query($conn,"INSERT INTO services (name,image,description,status,date,slug) VALUES('$_POST[title]','$filename','$_POST[description]','$_POST[status]',NOW(),'$_POST[slug]')");
    if($ins){
        header("Location:add-services.php?msg=Services created successfully");
        exit();
    }else{
        header("Location:add-services.php?msg=Failed to create Services");
        exit();
    }
}elseif(isset($_POST['insert_service_list'])){

    $ins=mysqli_query($conn,"INSERT INTO service_list (service,type,name,description,date) VALUES('$_POST[service]','$_POST[type]','$_POST[name]','$_POST[description]',NOW())");
    if($ins){
        header("Location:add-service-list.php?msg=Detail created successfully");
        exit();
    }else{
        header("Location:add-service-list.php?msg=Failed to create detail");
        exit();
    }
}elseif(isset($_POST['insert_service_gallery'])){
  if(!empty($_FILES)){
    $type="photo";
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:add-service-gallery.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:add-service-gallery.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="ithink-".$rand.'-'.$file_name;
        $filepath="../img/gallery/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename="noimg.png";
    }

  }else{
    $type="video";
    $filename=$_POST['link'];
  }
    $ins=mysqli_query($conn,"INSERT INTO service_gallery (serv_id,serv_list_id,type,gallery,date) VALUES('$_POST[service]','$_POST[service_list]','$type','$filename',NOW())");
    if($ins){
        header("Location:add-service-gallery.php?msg=Gallery created successfully");
        exit();
    }else{
        header("Location:add-service-gallery.php?msg=Failed to create Gallery");
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
        $filename="ithink-".$rand.'-'.$file_name;
        $filepath="../img/clients/".$filename;
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
    
}


?>


