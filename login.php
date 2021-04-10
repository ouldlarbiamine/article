<?php
include 'connect22.php';
// echo $_POST['user']."<br>";
// echo $_POST['password']."<br>";
// echo $_POST['persone']."<br>";
$num=$_POST['user'];
$passe=$_POST['password'];
session_start();

                                  



	  $_SESSION['login']=1;


/*


SELECT `user`,`motpasse`,`nom`,`prenom` FROM `admin` WHERE 1
*/
//echo "SELECT `mat`,`mdps` FROM `user`  WHERE `mat`=$num AND`mdps`='$passe'";

if($_POST['persone']=="admin"){
$query1= mysqli_query($con,"SELECT `user` FROM `admin` WHERE `user`='$num' AND `motpasse`='$passe'");
$tab= mysqli_fetch_array($query1);
$id=$tab[0];
if ($id){
    

header("Location:espace_admin.php?num=$id");
}
 else {
    include 'error2.php';
    
}



}
    

        elseif($_POST['persone']=="expert") {
	 $query1= mysqli_query($con,"SELECT `id_expert` FROM `expert` WHERE  `mot_de_passe`='$passe' and `use`=$num");
								 
								 
								 echo "SELECT `id_expert`,`SSN`, `nom`,`titre`,`université`,`adresse`,`numero_de_telephone`, "
                                 . "`numero_de_telecopie`,`adresse_electronique`,`mot_de_passe`,"
								 ."`use`FROM `expert` WHERE  `mot_de_passe`='$passe' and `use`=$num";
        $tab= mysqli_fetch_array($query1);
        $id=$tab[0];
		echo $tab[0];
        if ($id){
        header("Location:espace_expert.php?num=$id");
        }
        else {
		include 'error2.php';}

        }
            

    
 else {
            header("Location:index.php");
     
 }
      
?>