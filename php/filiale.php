<?php 
$username='root';
$password='';
$conn=new mysqli('localhost','root','','mon_projet_web');


if(isset($_POST['CODEPROD']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['lieu']) and isset($_POST['envoyer'])){
	if (empty($_POST['CODEPROD']) or empty($_POST['prenom']) or empty($_POST['mail']) or empty($_POST['lieu']))
{
    echo"<b>Veuillez remplir tous les champs <body bgcolor='#2a97b5'></b>";
}
else{
 $CODEPROD = $_POST['CODEPROD'];
 $prenom= $_POST['prenom'];
 $lieu=$_POST['lieu'];
 $mail=$_POST['mail'];
     $sql = "INSERT INTO commande(codeprod,prenom,adresse,mail) VALUES('$CODEPROD','$prenom','$lieu','$mail')";
     if (!mysqli_query($conn,$sql)){
        echo"<b>revoyez les informations introduites, il y a eu un  petit soucis</b> <body bgcolor='#2a97b5'>";
     }else{
        echo"<b>Votre Commande a bien éte enregistrée  ,notre equipe vous contactera bientot pour les formalites à remplir</b></br><b>Merci d'avoir choisi GI_SHOP</b> <body bgcolor='#2a97b5' >";

     }
}
}
?>