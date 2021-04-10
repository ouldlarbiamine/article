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
                    <h1 class="page-header">forme ajoute d' expert </h1>
				
                </div>
                <!--End Page Header -->

                    <form action="ajout_expert2.php" method="POST">
                        
                      
                                  
   <label class="control-label" for="success" > nom:</label>
   <input type="text" class="form-control" id="success" name="nom" />

<label class="control-label" for="success" > SSN:</label>
   <input type="text" class="form-control" id="success" name="ssn" />

   <label class="control-label" for="success" > titre :</label>
   <input type="text" class="form-control" id="success" name="titre" />  
   <label class="control-label" for="success" > université ou entreprise :</label>
   <input type="text" class="form-control" id="success" name="univ" />   
   <label class="control-label" for="success" > adresse:</label>
   <input type="text" class="form-control" id="success" name="adresse" />

     <label class="control-label" for="success" >  numéro de téléphone,:</label>
   <input type="number" class="form-control" id="success" name="telephone" />
        <label class="control-label" for="success" >  numéro de télécopie,:</label>
   <input type="number" class="form-control" id="success" name="fax" />
        <label class="control-label" for="success" >  adresse électronique,:</label>
   <input type="text" class="form-control" id="success" name="imail" />
    <label class="control-label" for="success" > mot pass:</label>
    <input type="password" class="form-control" id="success" name="mot_de_passe" />
	
	
	
	



   <br>
   <input type="reset"  value="annuler" class="btn btn-danger" >
   <input type="submit"  value="enregistrer"  class="btn btn-primary">
   
          
          
          
          
        
        
        </form>
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
