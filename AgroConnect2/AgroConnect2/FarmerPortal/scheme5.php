<?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Namo Drone Didi</title>
       
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">

      <script src="../portal_files/jquery.min.js.download"></script>
      <script src="../portal_files/popper.min.js.download"></script>
      <script src="../portal_files/bootstrap.min.js.download"></script>

       
 </head>

 <body   >
 
      <body>

           <nav class="navbar navbar-expand-xl ">
                 
                <div class=" flex-row-reverse left ">

                     <div class="p-2">
                          
                     </div>
                      
                     <a class="float-left" href="#">
                          <img src="img/AgroVision.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px; width:150px;">
                     </a>
                </div>
                <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
                </button>
                <a class="float-left" href="farmerHomepage.php">
                     <img src="img/AgroVision.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px; width:150px;">
                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">



                     <div class="proicon">

                          <?php
                              if (!isset($_SESSION['phonenumber'])) {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                              }
                              ?>
                     </div>

                     <div class="list-group moblists">

                          <?php
                              if (isset($_SESSION['phonenumber'])) {

                                   echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                                   echo "<a href='Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                                   echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                              } else {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                              }
                              ?>
                          <div class='loginz' style="text-align:center;">
                               <?php getFarmerUsername(); ?>
                          </div>
                     </div>
                </div>




                <div class=" flex-row-reverse right ">
                     <div class="p-2 cart">
                           
                          <div class='loginz'>
                               <?php getFarmerUsername(); ?>
                          </div>
                     </div>
                     <div class="dropdown p-2 settings ">
                          <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Settings
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                        echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                          </div>
                     </div>
                </div>
           </nav>
           <br>
           <div class="row" style="text-align:center;">
           <div class="col-md-4 col-sm-12">
                     <a href="farmerHomepage.php" id="navbar"><label>Home</label></a>
                </div>
                 
                
                <div class="col-md-4 col-sm-12">
                    <a href="Schemes.php" id="navbar"><label>Schemes</label></a>
                </div>
                 
                <div class="col-md-4 col-sm-12">
                     <a href="CallCenter.php" id="navbar"><label>Call Centers</label></a>
                </div>
           </div>
           <hr>

          

            
           <div class="features container">
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;">Namo Drone Didi</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                 
                                    <img style="height:200px;width:50%" src="../Images/schemes/NAMODRONE.jpg" alt="logo">
                         
                          </div>
                           
                     </div>
                   
      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                           <h4><b>About:</b></h4>
                            <p style="font: size 25px">
                            The Government has recently approved a Central Sector Scheme for
                            providing drones to the Women Self Help Group (SHGs) for the
                            period from 2024-25 to 2025-26 with an outlay of Rs. 1261 Crores. The scheme aims to provide drones to 15000 selected Women Self Help Group (SHGs) for providing rental services to farmers for agriculture purpose (application of fertilizers and pesticides). Under this Scheme, Central Financial Assistance @ 80% of the cost of drone and accessories/ancillary charges upto a maximum of Rs. 8.0 Lakhs will be provided to the women SHGs for purchase of drones. The Cluster Level Federations (CLFs) of SHGs may raise the balance amount (total cost of procurement minus subsidy) as loan under National Agriculture Infra Financing Facility (AIF). Interest subvention @ 3% on the AIF loan will be provided to the CLFs. The scheme will also provide sustainable business and livelihood support
                            to SHGs and they would be able to earn additional income of at least of Rs. 1.0 lakh per annum
                            </p>
 
                          </div>
                           
                </div>
                 <div style="font-weight: bold ;font: size 20px;">
                    for more info:<a href="https://agriwelfare.gov.in/" style="margin-left: 10px;">official website</a>
                 </div>
                </div> 
                    
               </div>
           </div>
            
           <br> <br>
           <section id="footer" class="myfooter">
           <div class="container">
                      
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                               </ul>
                          </div>

                     </div>
                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                              <p> Team Technova</p>
                              
                              <p>AgroVision</p>
                              <p class="h6"> All copy right Reserved.</p>
                         </div>
                         </hr>
                    </div>
                </div>
           </section>
      </body>

 </html>