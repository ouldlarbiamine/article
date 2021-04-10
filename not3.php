

<!DOCTYPE html>


<?php
session_start();

                include 'mot.php';                      include 'conect.php';      

if(empty($_SESSION['login'])){
	
	header("Location:logout.php?num=$id");

	
}
else
{
if(empty($_SESSION['expert']))
{
	  $_SESSION['expert']=$_GET['num'];
               
}


}


?>

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
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                             </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>

                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a cl+ass="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                          </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;espace expert
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                           
                        </div>
                        <!--end search section-->
                  

				  </li>
                       <li class="">
						                                <a href="notez_articl.php"><?php echo "$notez_articl";?></a>

                    </li>
			
                
          
               
              
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


	  $_idexpert=  $_SESSION['expert'];





?>

















	  
              
              <?php
			  
			  	  $_idexpert=  $_SESSION['expert'];

	 $ttttr= $_SESSION['ttr2'];
	$nott=$_POST['nott'];





   
  $query1111=  mysqli_query($con," SELECT  `id_expert1`,`id_expert2`,`id_expert13` FROM `article` WHERE `titre`= '$ttttr'");
		
		
 while ($row1111 = mysqli_fetch_assoc($query1111)){
	 
               $id_expert1=$row1111['id_expert1'];
               $id_expert2=$row1111['id_expert2'];
               $id_expert13=$row1111['id_expert13'];
			   if ($_idexpert==$id_expert1)
			   {
				   
				     $query13111=  mysqli_query($con," UPDATE `article` SET `not_expert1` = '$nott' WHERE `article`.`titre`= '$ttttr'");

		   if($query13111)
	

{
    echo "insertion est terminer";
}
 else {
    echo "insertion est refusier";    
   

   
}
		   
		   
		   }			  
		   if ($_idexpert==$id_expert2)
			   {
		   
		   				     $query13111=  mysqli_query($con," UPDATE `article` SET `not__expert2` = '$nott' WHERE `article`.`titre`= '$ttttr'");





		   if($query13111)
	

{
    echo "insertion est terminer";
}
 else {
    echo "insertion est refusier";    
   

   
}
		   
		   }			  
		   if ($_idexpert==$id_expert13)
			   {
				   
				   				     $query13111=  mysqli_query($con," UPDATE `article` SET `not_expert3` = '$nott' WHERE `article`.`titre`= '$ttttr'");





		   if($query13111)
	

{
    echo "insertion est terminer";
}
 else {
    echo "insertion est refusier";    
   

   
}
			   }			  
			   
			   
			   
			   
			           }      



/**
//$query=  mysqli_query($con,"SELECT * FROM `sanse`");
$query=  mysqli_query($con,"SELECT `titre`,`id_session`,`id_lauteur_principal`,`id_orateur` FROM `article` WHERE $_idexpert in (`id_expert1`,`id_expert2`,`id_expert13`)");

$i2=0;                
//  oierient les etudient  choizi
  
echo "<table border=\"1\"  >";
     //   echo "<caption>  </caption>";
        echo "<tr><td> titre  </td><td> id_session </td>  <td>id_lauteur_principal</td> <td>id_orateur</td><td>notez</td> </tr>";
     
while ($row= mysqli_fetch_assoc($query)) {//1
    $id_session=$row['id_session']; 
	$titre=$row['titre'];  
	$id_lauteur_principal=$row['id_lauteur_principal'];  
	$id_orateur=$row['id_orateur'];  


                                                 echo "<tr><td>  $titre </td><td>$id_session  </td> <td>$id_lauteur_principal</td><td>$id_orateur</td><td>"
. " <a class=\"btn btn-success\"   href=\"not.php?titrer=$titre\"><i class=\"icon_check_alt2\"  ></i>notez  </a></td> </tr>";
                                           
                                                $i2++;
                                               }





echo "</table>";**/
?>
            </h1>          
              
               
         
                     
                  
                   



















				
                </div>
                <!--End Page Header -->
            </div>

            

        </div>
        <!-- end page-wrapper -->
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
