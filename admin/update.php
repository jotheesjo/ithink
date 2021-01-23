
<?php session_start();
include("db.php");
//admin Profile
if(isset($_POST['admin_profile_update'])){
    if($_POST['password']!=''){
        $password=md5($_POST['password']);
        $pwd=",admin_password='" .$password."' ";
    }else{
        $pwd='';
    }
    $q=mysqli_query($conn,"UPDATE admin_profile SET admin_name ='$_POST[admin_name]',admin_email='$_POST[admin_email]',enquiryemail='$_POST[enquiryemail]',admin_mobile ='$_POST[admin_mobile]',admin_addr1='$_POST[admin_addr1]',admin_addr2='$_POST[admin_addr2]',footer_msg='$_POST[footer_msg]',facebook='$_POST[facebook]',youtube='$_POST[youtube]',pinterest='$_POST[pinterest]',instagram='$_POST[instagram]',linkedin='$_POST[linkedin]',twitter='$_POST[twitter]',admin_username='$_POST[admin_username]'".$pwd."WHERE admin_id='5'");
    if($q){	
        header('Location:admin-profile.php?msg=Profile updated login again');
        exit();
    }else{
        header('Location:admin-profile.php?msg=Failed to update profile');
    }
}

// update about
if(isset($_POST['update_about'])){
  $title=array();
  $description=array();
  foreach ($_POST['title'] as $innerKey => $innerValue) {
    $title[] = addslashes($innerValue);
}
foreach ($_POST['description'] as $innerKey => $innerValue) {
  $description[] = addslashes($innerValue);
}

  $features=array_combine($title, $description);
  $feature=json_encode($features);
  $about=mysqli_real_escape_string($conn,$feature);
  $q=mysqli_query($conn,"UPDATE about SET description ='$about' WHERE about_id='1'");
  if($q){

      header('Location:about.php?msg=detail updated successfully');
      exit();
  }else{
      header('Location:about.php?msg=Failed to update detail');
  }
}
// update_team
if(isset($_POST['update_team'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:team.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:team.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="invicts-".$rand.'-'.$file_name;
        $filepath="../img/team/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
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

    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $q=mysqli_query($conn,"UPDATE team SET name ='$_POST[name]',designation='$_POST[designation]',description ='$description',image='$filename',status ='$_POST[status]',facebook='$facebook',youtube='$youtube',pinterest='$pinterest',instagram='$instagram',linkedin='$linkedin',twitter='$twitter' WHERE team_id='$_POST[team_id]'");
    if($q){

        header('Location:team.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:team.php?msg=Failed to update detail');
    }
}

// update_testimonial
if(isset($_POST['update_testimonial'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:testimonial.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:testimonial.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="invicts-".$rand.'-'.$file_name;
        $filepath="../img/testimonial/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $q=mysqli_query($conn,"UPDATE testimonial SET name ='$_POST[name]',designation='$_POST[designation]',description ='$description',image='$filename',status ='$_POST[status]' WHERE testimonial_id='$_POST[testimonial_id]'");
    if($q){

        header('Location:testimonial.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:testimonial.php?msg=Failed to update detail');
    }
}

// update_videotestimonial
if(isset($_POST['update_video_testimonial'])){
  $q=mysqli_query($conn,"UPDATE video_testimonial SET link ='$_POST[link]',status ='$_POST[status]' WHERE video_testimonial_id='$_POST[video_testimonial_id]'");
  if($q){

      header('Location:video-testimonial.php?msg=detail updated successfully');
      exit();
  }else{
      header('Location:video-testimonial.php?msg=Failed to update detail');
  }
}

// update services
if(isset($_POST['update_service'])){
    if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
        $file_name = $_FILES['photo']['name'];
        $file_size =$_FILES['photo']['size'];
        $file_tmp =$_FILES['photo']['tmp_name'];
        $file_type=$_FILES['photo']['type'];
          $tmp_explode=explode('.',$file_name);
        $file_ext=strtolower(end($tmp_explode));
        $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
           header("Location:services?msg=File type not support");
          exit();
        }elseif($file_size > 2097152){
          header("Location:services.php?msg=File size should be lessthan 2MB");
          exit();
        }else{
          $rand=rand(0,1000);
          $filename="vendor-".$rand.'-'.$file_name;
          $filepath="../images/service/".$filename;
           move_uploaded_file($file_tmp,$filepath);
      }
      }else{
          $filename=$_POST['img'];
      }
      
      $q=mysqli_query($conn,"UPDATE services SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]',image='$filename' WHERE service_id='$_POST[service_id]'");
      if($q){
  
          header('Location:services.php?msg=detail updated successfully');
          exit();
      }else{
          header('Location:services.php?msg=Failed to update detail');
      }
}
// update process
if(isset($_POST['update_process'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:process.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:process.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="vendor-".$rand.'-'.$file_name;
        $filepath="../images/process/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    
    $q=mysqli_query($conn,"UPDATE process SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]',image='$filename' WHERE process_id='$_POST[process_id]'");
    if($q){

        header('Location:process.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:process.php?msg=Failed to update detail');
    }
}
// update portfolio
if(isset($_POST['update_portfolio'])){
  if((isset($_FILES['photo'])) && $_FILES['photo']['name']!=''){
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_type=$_FILES['photo']['type'];
        $tmp_explode=explode('.',$file_name);
      $file_ext=strtolower(end($tmp_explode));
      $extensions= array("jpeg","jpg","png","webp");
    if(in_array($file_ext,$extensions)=== false){
         header("Location:portfolio.php?msg=File type not support");
        exit();
      }elseif($file_size > 2097152){
        header("Location:portfolio.php?msg=File size should be lessthan 2MB");
        exit();
      }else{
        $rand=rand(0,1000);
        $filename="vendor-".$rand.'-'.$file_name;
        $filepath="../images/portfolio/".$filename;
         move_uploaded_file($file_tmp,$filepath);
    }
    }else{
        $filename=$_POST['img'];
    }
    $q=mysqli_query($conn,"UPDATE portfolio SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]',image='$filename',link ='$_POST[link]' WHERE portfolio_id='$_POST[portfolio_id]'");
    if($q){

        header('Location:portfolio.php?msg=detail updated successfully');
        exit();
    }else{
        header('Location:portfolio.php?msg=Failed to update detail');
    }
}


// packages
if(isset($_POST['update_packages'])){
  $features=array_combine($_POST['fea_name'], $_POST['featuresstatus']);
  $feature=json_encode($features);
  $q=mysqli_query($conn,"UPDATE packages SET title ='$_POST[title]',subtitle='$_POST[subtitle]',status ='$_POST[status]',package_info='$feature' WHERE packages_id='$_POST[packages_id]'");
  if($q){

      header('Location:packages.php?msg=detail updated successfully');
      exit();
  }else{
      header('Location:packages.php?msg=Failed to update detail');
  }
}

// update_homesec2
if(isset($_POST['update_homesec2'])){
  $q=mysqli_query($conn,"UPDATE home_section2 SET title ='$_POST[title]',description='$_POST[description]',status ='$_POST[status]' WHERE home_id='$_POST[home_id]'");
  if($q){

      header('Location:home-section2.php?msg=detail updated successfully');
      exit();
  }else{
      header('Location:home-section2.php?msg=Failed to update detail');
  }
}



// update_client
if(isset($_POST['update_client'])){
  $q=mysqli_query($conn,"UPDATE clients set status='$_POST[status]' WHERE id='$_POST[id]'");
  if($q){

    header('Location:clients.php?msg=detail updated successfully');
    exit();
}else{
    header('Location:clients.php?msg=Failed to update detail');
}
}
// delete_client
if(isset($_POST['delete_client'])){
  $q=mysqli_query($conn,"DELETE FROM clients WHERE id='$_POST[id]'");
  if($q){

    header('Location:clients.php?msg=detail deleted successfully');
    exit();
}else{
    header('Location:clients.php?msg=Failed to delete detail');
}
}
// update_slidersection
if(isset($_POST['update_slidersection'])){
  $description=mysqli_real_escape_string($conn,$_POST['description']);
  $q=mysqli_query($conn,"UPDATE slider_section  set link='$_POST[link]',description='$description' WHERE id='1'");
  if($q){
    header('Location:slider-section.php?msg=detail deleted successfully');
    exit();
}else{
    header('Location:slider-section.php?msg=Failed to delete detail');
}
}

//update title

if(isset($_POST['update_title'])){
  $q=mysqli_query($conn,"UPDATE title_list  set about='$_POST[about]', portfolio='$_POST[portfolio]', package='$_POST[package]', process='$_POST[process]', service='$_POST[service]', contact='$_POST[contact]' WHERE id='1'");
  if($q){
    header('Location:title.php?msg=detail updated successfully');
    exit();
}else{
    header('Location:title.php?msg=Failed to update detail');
}
}
?>