	<?php
    //echo("jawad");

if(isset($_POST['submit']))
{
  
include("connexion.php");
        $login=$_POST['email'];
        $pass=$_POST['password'];
  if(empty($_POST['email'])&&empty($_POST['password']))
  {
    header("location:#");
  }
  else{
	 $sql= "SELECT * FROM `formateur` WHERE `email`='".$login."' and `password`='".$pass."'";
        $que=mysqli_query($db,$sql);
        $data=mysqli_fetch_assoc($que);
        if($data['email']!=$login || $data['password']!=$pass)
        {
		    header("location:user_tuto.php");

        }
        else 

        {
        	$_SESSION['login']=$login;
        	$_SESSION['password']=$pass;
      
       header("location:frameapp.html");


        }
  }
}?>