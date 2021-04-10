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
/                                <a href="recherche_par_fourniseur.php">recherche  par fourniseur </a>
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
                  
                <!--End Page Header -->


   <?php
include 'conect.php';
         /*      titre      univ
			   telephone
			   fax
			   imail
			   mot_de_passe*/
                                 

$nom=$_POST['nom'];
$ssn=$_POST['ssn'];
$titre=$_POST['titre'];
$adresse=$_POST['adresse'];
$univ=$_POST['univ'];

//INSERT INTO `enseignant` (`matricule_enseignant`, `nom_enseignant`, `prenom_eneignant`, `num_telephone_enseignant`, `mot_de_passe_enseignant`)
 //VALUES ('100000', 'ammld', 'akdlk', '56', '4544');

$query1= mysqli_query($con, "SELECT MAX(`id_auteur`) FROM `auteur` WHERE 1");
$tab=  mysqli_fetch_array($query1);
$matricule=$tab[0]+1;



//echo "INSERT INTO `enseignant` (`matricule_enseignant`, `nom_enseignant`, `prenom_eneignant`, `num_telephone_enseignant`, `mot_de_passe_enseignant`)"
//." VALUES ('$matricule', '$nom', '$prenom', '$telephon', '$mot_passe');";
 
//$query2=mysqli_query($con,"INSERT INTO `expert` (`id_expert`, `SSN`, `nom`, `titre`, `université`, `adresse`, `numero_de_telephone`, `numero_de_telecopie`, `adresse_electronique`, `mot_de_passe`, `use`) VALUES ('$matricule', '$ssn', ' $nom', '$titre', '$univ', '$adresse', '$telephone', '$fax', '$imail', '$mot_de_passe', '$matricule');");
$query2=mysqli_query($con,"INSERT INTO `auteur` (`id_auteur`, `nom`, `SSN`, `titre`, `universite`, `adresse`) VALUES ('$matricule', '$nom', '$ssn', '$titre', '$univ', '$adresse');");
/*echo "INSERT INTO `survaillant` (`matricule`, `nom`, `prenom`, `telephone`, `mot_de_passe`)"
." VALUES ('$matricule', '$nom', '$prenom', '$telephon', '$mot_passe');";*/





              
                                  

	
	
	
	
?>

  <h1 class="page-header">

<?php 
if($query2)
	

{
    echo "insertion est terminer";
}
 else {
    echo "insertion est refusier";    
   

   
}

?>

  </h1>
				
                </div>
				<?php echo "$ajouter2";?>


   <label class="control-label" for="success" > nom:<?php echo "$nom";?></label><br>
<label class="control-label" for="success" > SSN:<?php echo "$ssn";?></label><br>

   <label class="control-label" for="success" > titre : <?php echo "$titre";?></label><br>

   <label class="control-label" for="success" > université ou entreprise :<?php echo "$univ";?></label><br>

   <label class="control-label" for="success" > adresse: <?php echo "$adresse";?></label><br>




              
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
