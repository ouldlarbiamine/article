
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
               <div class="col-lg-12">
			   
			   





                  
					
					
						
				
				
				

				
			 <h1 class="page-header">  
<?php





$expert1=$_POST['expert1'];
$expert2=$_POST['expert2'];
$expert3=$_POST['expert3'];
$titre=$_SESSION['titrearticl'];





if(($expert1==$expert2)or($expert3==$expert2) or($expert1==$expert3))
	{echo " Vous ne pouvez pas choisir deux fois la même option";}
else{





$motcle=$_SESSION['motcle'];

$princpl=$_SESSION['princpl'];

$telephon=$_SESSION['telphon'];

$telecope=$_SESSION['telecope'];

$orateur=$_SESSION['orateur'];

$cv=$_SESSION['cv'];

$titre=$_SESSION['titre'];

$adresse=$_SESSION['adresse'];

$univ=$_SESSION['univ'];

$id_session=$_SESSION['sesssion'];

$nbpage=$_SESSION['nbpage'];





$nbautuare=$_SESSION['nbautuare'];


	  for($j=0;$j<$nbautuare;$j++)
	  {$k=$j+1;
		$a=$_SESSION["aut$k"];
	    echo" <label class=\"control-label\" for=\"success\" > l'auteur numero $k &nbsp:&nbsp: \"$a\"</label><br>";

	  
	  
	  }















$_SESSION['titrearticl']=$titre;



$query2=mysqli_query($con,"UPDATE `article` SET `id_expert1` = '$expert1', `id_expert2` = '$expert2', `id_expert13` = '$expert3' WHERE `article`.`titre` = '$titre';");






  echo" <label class=\"control-label\" for=\"success\" > titre: \"$titre\"</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > mots clés :\"$motcle\"</label><br>";

  
  
  $query66=  mysqli_query($con,"  SELECT `theme` FROM `session` WHERE `id_session`='$id_session'");
		
		
 while ($row66 = mysqli_fetch_assoc($query66)){
               $theme=$row66['theme'];
			           }       
  
  echo" <label class=\"control-label\" for=\"success\" > theme : $theme</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > nombre de pages :$nbpage</label><br>";
  
  

    
  $query111=  mysqli_query($con,"  SELECT `nom` FROM `auteur` WHERE `id_auteur`='$princpl'");
		
		
 while ($row111 = mysqli_fetch_assoc($query111)){
               $nommmm=$row111['nom'];
			           }       
  
  
  echo" <label class=\"control-label\" for=\"success\" > lauteur_principal :$nommmm</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > numeros_de_telephone _dauteur_principal:$telephon</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > numero_de_telecopie_dauteur_principal,: $telecope</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > adresse_electronique_dauteur_principal: $adresse\</label><br>";
  

  $query111=  mysqli_query($con,"  SELECT `nom` FROM `auteur` WHERE `id_auteur`='$orateur'");
		
		
 while ($row111 = mysqli_fetch_assoc($query111)){
               $nommmm=$row111['nom'];
			           }       
  
  
  echo" <label class=\"control-label\" for=\"success\" > orateur:$nommmm\</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > CV d orateur:$cv</label><br>";
   


   $query16=  mysqli_query($con,"SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE  `id_expert`=$expert1");
		
		

 while ($row16 = mysqli_fetch_assoc($query16)){
               $id_expert=$row16['id_expert'];
               $nomexpert=$row16['nom'];
			   
			   
			           }       


  echo" <label class=\"control-label\" for=\"success\" > expert1:$nomexpert</label><br>";
  
  
  
   $query16=  mysqli_query($con,"SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE  `id_expert`=$expert2");
		

 while ($row16 = mysqli_fetch_assoc($query16)){
               $id_expert=$row16['id_expert'];
               $nomexpert=$row16['nom'];
			   
			   
			           }       


  echo" <label class=\"control-label\" for=\"success\" > expert2:$nomexpert</label><br>";
   $query16=  mysqli_query($con,"SELECT `id_expert`,`nom`,`SSN`,`titre`,`universite`,`adresse` FROM `expert` WHERE  `id_expert`=$expert2");
		

 while ($row16 = mysqli_fetch_assoc($query16)){
               $id_expert=$row16['id_expert'];
               $nomexpert=$row16['nom'];
			   
			   
			           }       


  echo" <label class=\"control-label\" for=\"success\" > expert3:$nomexpert</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > not expert1:null</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > not expert2:null</label><br>";
  echo" <label class=\"control-label\" for=\"success\" > not expert3:null</label><br>";



}


    




//INSERT INTO `enseignant` (`matricule_enseignant`, `nom_enseignant`, `prenom_eneignant`, `num_telephone_enseignant`, `mot_de_passe_enseignant`)
 //VALUES ('100000', 'ammld', 'akdlk', '56', '4544');





 

 ?>
 
 
  </h1>	
 

										   
										   





					
					
					
					
					
					
					
					
					
					
				
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
