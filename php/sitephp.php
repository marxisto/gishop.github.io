<?php 
$username='root';
$password='';
$conn=new mysqli('localhost','root','','mon_projet_web');
if(isset($_POST['login']) and isset($_POST['mail']) and isset($_POST['sms']) and isset($_POST['envoyer'])){
 $login = $_POST['login'];
 $mail = $_POST['mail'];
 $sms=$_POST['sms'];

 $sql= "INSERT INTO contact(login,mail,sms) VALUES('$login','$mail','$sms')";
     if (!mysqli_query($conn,$sql)){
        echo"no inseré";
     }else{
        echo"inseré";
     }
     
}
else{
    echo"une variable est soite incorrecte soite nulle";
}
?>