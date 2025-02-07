<?php
 
$conn=mysqli_connect('localhost','root',);
if($conn){
   echo "connection done";
} else {
   echo "no connection";
}

mysqli_select_db($conn,'newdata'); 
print_r($_POST);
 if(isset($_POST["submit"])){ 
   $user=$_POST['email'];
   $email=$_POST['user'];
   $mobile=$_POST['mobile'];
   $comment=$_POST['comment'];
   $query="insert into userinfodata (user, email, mobile, comment) values('$user','$email','$mobile','$comment')";
   mysqli_query($conn,$query);
};
 

?>
