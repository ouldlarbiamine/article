<!DOCTYPE html>


<?php
session_start();

                include 'mot.php';                      include 'conect.php';      

if(empty($_SESSION['login'])){
	
	header("Location:logout.php");

	
}
else
{
if(empty($_SESSION['admin']))
{
	  $_SESSION['admine']="26001";
               
}


}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
                  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->



               

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
       <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div> <strong></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;espace admin
                                </div>
                            </div>
                        </div>               <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                           
                        </div>
                        <!--end search section-->
                  

				  </li>
                       <li class="">
                        <a href="espace_admin.php">acceille</i></a>
                    </li>
					<!--  <li class="">
                        <a href="participer_conference.php"><i class="">participer conference</i></a>
                    </li>
										  <li class="">
                        <a href="publier_article.php"><i class="">publier article</i></a>
                    </li>-->

                    <li>
                        <a href="#"><?php echo "$ajouter";?><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="ajout_expert.php"><?php echo "$ajouter1";?></a>
                            </li>
                            <li>
                                <a href="ajouter_session.php"><?php echo "$ajouter2";?></a>
                            </li>           
							<li>
                                <a href="ajouter_autuer.php"><?php echo "$ajouter3";?></a>
                                
                            </li>					
							<li>
                                <a href="ajouter_article.php"><?php echo "$ajouter4";?></a>
                                
                            </li>						

                        </ul>
													<li>
                                <a href="choisi_les_exper_pour_articl.php"><?php echo "$ajouter5";?></a>
                                
                            </li>
							
							
							
								<li>
                                <a href="classez_les_artecl.php"><?php echo "$ajouter6";?></a>
                                
                            </li>

                   <!-- </li>
					                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>service web<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="recherche_par_nom.php">recherche par nom</a>
                            </li>
                            <li>
                                <a href="recherche _par_description.php">recherche par description </a>
                            </li>           
							<li>
                                <a href="recherche_par_fourniseur.php">recherche  par fourniseur </a>
                            </li>
                        </ul>

                    </li>-->
          
               
              
                </ul>
                <!-- end side-menu -->
            </div>


            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
               <div class="col-lg-12" >
			   
			   





                  
					
					
						
				
				
				

				
				
<?php


$motcle=$_POST['motcle'];
$_SESSION['motcle']=$motcle;

$princpl=$_POST['princpl'];
$_SESSION['princpl']=$princpl;

$telephon=$_POST['telphon'];
$_SESSION['telphon']=$telephon;

$telecope=$_POST['telecope'];
$_SESSION['telecope']=$telecope;

$orateur=$_POST['orateur'];
$_SESSION['orateur']=$orateur;

$cv=$_POST['cv'];
$_SESSION['cv']=$cv;

$titre=$_POST['ttr'];
$_SESSION['titre']=$titre;

$adresse=$_POST['adresse'];
$_SESSION['adresse']=$adresse;

$univ=$_POST['univ'];
$_SESSION['univ']=$univ;

$id_session=$_POST['sesssion'];
$_SESSION['sesssion']=$id_session;

$nbpage=$_POST['nbpage'];
$_SESSION['nbpage']=$nbpage;





$nbautuare=$_SESSION['nbautuare'];
$_SESSION['titrearticl']=$titre;








$query2=mysqli_query($con,"INSERT INTO `article` (`titre`, `id_session`, `nb_pages`, `mots_cles`, `id_lauteur_principal`, `numeros_de_telephone_dauteur_principal`, `numero_de_telecopie_dauteur_principal`, `adresse_electronique_dauteur_principal`, `id_orateur`, `CV_d_orateur`, `id_expert1`, `not_expert1`, `id_expert2`, `not__expert2`, `id_expert13`, `not_expert3`) "
                                           ."VALUES ('$titre', '$id_session', '$nbpage', '$motcle', '$princpl', '$telephon', '$telecope', '$adresse', '$orateur', '$cv', NULL, NULL, NULL, NULL, NULL, NULL);");








	  for($j=0;$j<$nbautuare;$j++)
	  {$k=$j+1;
		$choi1=$_POST["aut$k"];
		$choi= explode('*',$choi1);
		

	  $ar[$j]=$choi[0];
	  $unver[$j]=$choi[1];
	  		$_SESSION["aut$k"]=$choi[2];

	  
	  }
	  
	  
	  


	  $b3=true;
		for($j=0;$j<$nbautuare;$j++)
		{$cpt=0;
			for($e=0;$e<$nbautuare;$e++)
			if($ar[$j]==$ar[$e]){
				$cpt++;}
		  if($cpt>1)
		  {$b3=false; }}
		if($b3==true)
		{ 
	
	
	/* echo "<table border=\"1\"  >";
			echo "<caption>list des auteur </caption>";
			echo "<tr>
					<td> numero </td>
						<td> auteur</td>
						</tr> ";*/
	   for($j=0;$j<$nbautuare;$j++)
	  {$k=$j+1;
       
	   

      
	  $auteur=$ar[$j];
	  	   $query111= mysqli_query($con, "INSERT INTO `propose` (`id_autaure`, `titre_articl`) VALUES ('$auteur', '$titre');");
		 //  echo "INSERT INTO `propose` (`id_autaure`, `titre_articl`) VALUES ('$auteur', '$titre');";


	  
	 /*  echo "    <tr>
					<td>$k </td>
						<td>$auteur</td>
					</tr> ";*/
	// $query7=mysql_query("INSERT INTO `choix` (`num_choix`, `num_insc`, `cod_sp`) VALUES ('$k', '$num_insc', '$cod_sp_choisi');");  
	  }//echo "</table>"; 
	  
	


/*echo "INSERT INTO `survaillant` (`matricule`, `nom`, `prenom`, `telephone`, `mot_de_passe`)"
." VALUES ('$matricule', '$nom', '$prenom', '$telephon', '$mot_passe');";*/


/*********************************************************
*********************************************************/

 echo " <h1 class=\"page-header\">$ajouter5</h1>";
 echo "<form action=\"ajouter_article4.php\" method=\"POST\">";
 
								  
									  echo "<label>l'expert numero 1 : &nbsp </label>";
									  echo "<select class=\"form-control\" name=\"expert1\">";

                        
         //echo "SELECT `id_groupe`,`id_niveu` FROM `groupe` WHERE 1";

        $query6=  mysqli_query($con,"SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE  1");
		
		
echo "SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE 1";
 while ($row6 = mysqli_fetch_assoc($query6)){
               $id_expert=$row6['id_expert'];
               $nom=$row6['nom'];
               $titre=$row6['titre'];
               $universite=$row6['universite'];
			   	 if(  in_array("$universite",$unver)==false )

 echo "<option  value=\"$id_expert\">nom: $nom  universite:  $universite  adresse:$adresse</option>";        }       


echo " </select>"; 




									  echo "<label>l'expert numero 2  : &nbsp </label>";
									  echo "<select class=\"form-control\" name=\"expert2\">";

                        
         //echo "SELECT `id_groupe`,`id_niveu` FROM `groupe` WHERE 1";

        $query6=  mysqli_query($con,"SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE  1");
		
		
echo "SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE 1";
 while ($row6 = mysqli_fetch_assoc($query6)){
               $id_expert=$row6['id_expert'];
               $nom=$row6['nom'];
               $titre=$row6['titre'];
               $universite=$row6['universite'];
			   	 if(  in_array("$universite",$unver)==false )

 echo "<option  value=\"$id_expert\">nom: $nom  universite:  $universite  adresse:$adresse</option>";        }       


echo " </select>"; 




									  echo "<label>l'expert numero 3  : &nbsp </label>";
									  echo "<select class=\"form-control\" name=\"expert3\">";

                        
         //echo "SELECT `id_groupe`,`id_niveu` FROM `groupe` WHERE 1";

        $query6=  mysqli_query($con,"SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE  1");
		
		
echo "SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE 1";
 while ($row6 = mysqli_fetch_assoc($query6)){
               $id_expert=$row6['id_expert'];
               $nom=$row6['nom'];
               $titre=$row6['titre'];
               $universite=$row6['universite'];
			   	 if(  in_array("$universite",$unver)==false )

 echo "<option  value=\"$id_expert\">nom: $nom  universite:  $universite  adresse:$adresse</option>";        }       


echo " </select>"; 
echo "
  <br>
   <input type=\"reset\"  value=\"annuler\" class=\"btn btn-danger\" ><input type=\"submit\"  value=\"enregistrer\"  class=\"btn btn-primary\"></form>"; 























	}  
 else {echo "  <h1 class=\"page-header\">  Vous ne pouvez pas choisir deux fois la même option</h1>";}  
    




//INSERT INTO `enseignant` (`matricule_enseignant`, `nom_enseignant`, `prenom_eneignant`, `num_telephone_enseignant`, `mot_de_passe_enseignant`)
 //VALUES ('100000', 'ammld', 'akdlk', '56', '4544');





 

 ?>
 

										   
										   





					
					
					
					
					
					
					
					
					
					
				
                </div>
                <!--End Page Header -->
				
				
		

            



										<!--End Page Header -->
            </div>

            

        </div>

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
