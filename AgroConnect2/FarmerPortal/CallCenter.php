<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Call & SMS</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
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

<body>





     <body>

          <nav class="navbar navbar-expand-xl ">
               <!-- <a href="#" class="navbar-brand">Academind</a> -->
               <div class=" flex-row-reverse left ">

                    <div class="p-2">
                         <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
                         <!-- <span id="icon" style="color:green"> 5 </span>
                </div>  -->
                    </div>
                    <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
                    <a class="float-left" href="#">
                         <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
                    </a>
               </div>
               <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
               </button>
               <a class="float-left" href="farmerHomepage.php">
                    <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
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
                              echo "<a href=Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
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
                         <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div> -->
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
               <div class="col-md-3 col-sm-12">
                    <a href="farmerHomepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
               </div>
               <div class="col-md-3 col-sm-12">
                    <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
               </div>
               <div class="col-md-3 col-sm-12">
                    <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
               </div>
               <div class="col-md-3 col-sm-12">
                    <a href="CallCenter.php" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Call Centers</label></a>
               </div>
          </div>
          <hr>


          <br>

          
          <br>
          <br>

          <div style="display:block;">

               <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Call Center , Location's & Langauges</b></label></div>
               <br>

               <br>
               <h4 align="center">Toll Free Number : 1800564999</h4>
               <br>
               <table class="table">
                    <thead align="center" class=tableyhead>
                         <th class=thy>SR NO.</th>
                         <th class=thy>LOCATION</th>
                         <th class=thy>STATES</th>
                         <th class=thy>LANGUAGES</th>


                    </thead>
                    <tr align="center" class=trow>
                         <th align="center">1</th>
                         <th align="center">Hyderabad</th>
                         <th align="center">Andhra Pradesh</th>
                         <th align="center">Telugu</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">2</th>
                         <th align="center">Patna</th>
                         <th align="center">Bihar | Jharkhand</th>
                         <th align="center">Hindi</th>


                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">3</th>
                         <th align="center">Jaipur</th>
                         <th align="center">Delhi | Rajasthan</th>
                         <th align="center">Hindi</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">4</th>
                         <th align="center">Ahmadabad/Anand</th>
                         <th align="center">Gujarat | Dadra & Nagar Haveli | Daman & Diu</th>
                         <th align="center">Gujarati | Goan</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">5</th>
                         <th align="center">Chandigarh</th>
                         <th align="center">Haryana | Punjab | Chandigarh | Himachal Pradesh</th>
                         <th align="center">Hindi/Haryanvi | Punjabi | Hindi</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">6</th>
                         <th align="center">Jammu</th>
                         <th align="center">Jammu and Kashmir</th>
                         <th align="center">Dogri, Kashmiri, Ladakh</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">7</th>
                         <th align="center">Bangalore</th>
                         <th align="center">Karnataka | Kerala | Lakshadweep</th>
                         <th align="center">Kannada | Malayalam</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">8</th>
                         <th align="center">Jabalpur</th>
                         <th align="center">Madhya Pradesh | Chhattisgarh</th>
                         <th align="center">Hindi</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">9</th>
                         <th align="center">Nagpur/Pune</th>
                         <th align="center">Maharashtra | Goa</th>
                         <th align="center">Marathi | Goan</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">10</th>
                         <th align="center">Coimbatore</th>
                         <th align="center">Tamil Nadu | Puducherry | Andaman & Nicobar</th>
                         <th align="center">Tamil</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">11</th>
                         <th align="center">Kanpur</th>
                         <th align="center">Uttar Pradesh | Uttarakhand</th>
                         <th align="center">Hindi</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">12</th>
                         <th align="center">Kolkata</th>
                         <th align="center">West Bengal | Sikkim</th>
                         <th align="center">Bengali | Sikkimese</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">13</th>
                         <th align="center">Bhubaneshwar</th>
                         <th align="center">Orissa</th>
                         <th align="center">Oriya</th>

                    </tr>
                    <tr align="center" class=trow>
                         <th align="center">14</th>
                         <th align="center">Guwahati</th>
                         <th align="center">Arunachal Pradesh | Assam | Manipur | Meghalaya | Mizoram | Nagaland | Tripura</th>
                         <th align="center">Adi | Assamese | Manipuri | Khasi | Mizo | Nagamese | Bengali</th>

                    </tr>

               </table>
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