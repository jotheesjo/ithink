<?php session_start();
include("admin/db.php");
if(isset($_POST['newsemail'])){
$q=mysqli_query($conn,"INSERT INTO `newsletter` ( `email`) VALUES ('$_POST[newsemail]')");
if($q){
echo "Newsletter subscribed";
}else{
    echo "Try again later";
}
}
// contact 
if(isset($_POST['contactname'])){

    //mail
    $from=$_POST['contactemail'];
    $to = "jothees.clouddreams@gmail.com"; 
	$subject = "Contact Form";
    
    $message = "
	Name: ".$_POST['contactname']."\n
	Email: ".$_POST['contactemail']." \n
	Title: ".$_POST['contacttitle']." \n
    Message: ".$_POST['contactmessage']." \n";
    
     $headers = "From:" . $from;
     if(mail($to,$subject,$message,$headers)){
       echo "Your request received our team will contact soon.";
    }else{
       echo "Something went wrong try again";
   }
}

// get quote
if(isset($_POST['qname'])){

    //mail
    $from=$_POST['qemail'];
    $to = "jothees.clouddreams@gmail.com"; 
	$subject = "Contact Form";
    
    $message = "
    Name: ".$_POST['qname']."\n
    Mobile: ".$_POST['qmobile']." \n
    Email: ".$_POST['qemail']." \n
    Date: ".$_POST['qdate']." \n
    Service: ".$_POST['qservice']." \n";
    
     $headers = "From:" . $from;
    
   if(mail($to,$subject,$message,$headers)){
       echo "Your request received our team will contact soon.";
    }else{
       echo "Something went wrong try again";
   }
}
?>