<!DOCTYPE html>
<?php
include("database.php");
include("getPendingFunerals.php");
include("getAnnouncedFunerals.php")
?> 

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Admin Page</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php
    if (isset($_SESSION["message"])){
         
                $message=$_SESSION["message"];
echo "<script type='text/javascript'>alert('$message');</script>";        
    unset($_SESSION['message']);
    
    
    }
    
    ?>
    
 
</head>





<body onload="myfunction()">
 
    <div id="loading"></div>
	<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            <div class="logo-container">
                <h3 class="logo animate__animated animate__fadeInLeftBig">FUNERAL<span>360</span></h3>
            </div>
            <div class="nav-btn">
                <div class="nav-links animate__animated animate__fadeInDownBig">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.php">Home</a>
                        </li>
<!--
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Menu<i class="fas fa-caret-down"></i></a>
                             DropDown
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Services<i class="fas fa-caret-down"></i></a>    
                        </li>
-->
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#about">About</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign animate__animated animate__fadeInRightBig" style="--i: 1.8s">
                    <?php
						
                            if(isset($_SESSION["user"])){
                                $data=$_SESSION["user"];
								
                                 echo  "<a href='#' class='btn solid'>$data</a>";
                                echo  "<a href='logout.php' class='btn transparent'>Logout</a>";
                        
                                
                            }
                    else{
                    echo  "<a href='login/login.html' class='btn transparent'>Log in</a>";
                    echo  "<a href='login/login.html' class='btn solid'>Sign up</a>";
                    }
                            ?>
<!--
                    
-->
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
           
            <div class="banner" >
                
            <div  class="animate__animated animate__fadeInUpBig" style="width:100%;height:545px;">
                
            <table style="width:90%;text-align: left;">
                <h2>Announced | نشر شدہ اعلانات</h2>
	           <thead>
                   <tr>
                    <th>Name </th>
                    <th>| Father Name</th>
                    <th>| Cause of Death </th>
                    <th>| Age </th>
                    <th>| Date % Time </th>
			        <th>| Address</th>
			        <th>| Focal Person Contact</th>
			       
			        <th colspan="2">| Action</th>
                   </tr>
	           </thead>
	
	   <?php while ($row = mysqli_fetch_array($announced)) { ?>
		  <tr>
                 <td><?php echo $row['name']; ?></td>
                 <td><?php echo $row['fathername']; ?></td>
                 <td><?php echo $row['cod']; ?></td>
                 <td><?php echo $row['age']; ?></td>
                 <td><?php echo $row['dat']; ?></td>
			     <td><?php echo $row['address']; ?></td>
			     <td><?php echo $row['fpc']; ?></td>
                 <td>   
              <td>
				    <a href="deleteAnnouncement.php?del=<?php echo $row['sr']; ?>" class="del_btn">Delete Announcement</a>
              </td>
		</tr>
	<?php } ?>
                </table>
                <table style="width:90%;text-align: left;">
                <h2>Un-Announced |  غیر نشر شدہ اعلانات </h2>
	           <thead>
                   <tr>
                    <th>Name </th>
                    <th>| Father Name</th>
                    <th>| Cause of Death </th>
                    <th>| Age </th>
                    <th>| Date % Time </th>
			        <th>| Address</th>
			        <th>| Focal Person Contact</th>
			        <th>| Status</th>
			       
			        <th colspan="2">| Action</th>
                   </tr>
	           </thead>
	
	   <?php while ($row = mysqli_fetch_array($pending)) { ?>
		  <tr>
                 <td><?php echo $row['name']; ?></td>
                 <td><?php echo $row['fathername']; ?></td>
                 <td><?php echo $row['cod']; ?></td>
                 <td><?php echo $row['age']; ?></td>
                 <td><?php echo $row['dat']; ?></td>
              
			     <td><?php echo $row['address']; ?></td>
			     <td><?php echo $row['fpc']; ?></td>
			     <td><?php echo $row['status']; ?></td>
                 <td>
                     <a href="announceFuneral.php?edit=<?php echo $row['sr']; ?>" class="edit_btn" >Announce</a>
			     </td>
              <td>
				    <a href="deleteFuneral.php?del=<?php echo $row['sr']; ?>" class="del_btn">Delete</a>
              </td>
		</tr>
	<?php } ?>
</table>
                
                
                
                
                
                
                
                </div>

       
            
            
            </div>
            
        </section>
        <style type="text/css">
    
            @keyframes jello {
                11.1% {
                    transform: none
                }
                22.2% {
                    transform: skewX(-12.5deg) skewY(-12.5deg)
                }
                33.3% {
                    transform: skewX(6.25deg) skewY(6.25deg)
                }
                44.4% {
                    transform: skewX(-3.125deg) skewY(-3.125deg)
                }
                55.5% {
                    transform: skewX(1.5625deg) skewY(1.5625deg)
                }
                66.6% {
                    transform: skewX(-0.78125deg) skewY(-0.78125deg)
                }
                77.7% {
                    transform: skewX(0.390625deg) skewY(0.390625deg)
                }
                88.8% {
                    transform: skewX(-0.1953125deg) skewY(-0.1953125deg)
                }
                100% {
                    transform: none
                }
            }

            .jello {
                animation: jello 2s infinite;
                transform-origin: center
            }

            .center {
                display: inline-block
            }

            .jello {
                animation: jello 2s ;
                transform-origin: center
            }

            .center {
                display: inline-block
            }



        </style>

      
    </main>

<!--
    <div class="Servicebox">

        <div  class="box">
            <div class="icon">JOM</div>
            <div class="content">
                <h3>Janaza On MAP</h3>
                <p>You can easily Post A janaza with details on map with few steps press the start button.</p>
                
                <?php
						
                            if(isset($_SESSION["user"])){
                                
								echo "<a class='Rn' href='jom.php'>Start</a>";
                                
                               
                                
                            }
                    else{
                        echo "<a class='Rn' href='login/login.html'>Click Here To Login</a>";                    
                    }
                            ?>
                
                
            
            </div>
        </div>
        <div  class="box">
            <div class="icon">STT</div>
            <div class="content">
                <h3>Speech to text conversion</h3>
                <p>In this module you can speak and our smart system convert your speech into text.
                You can cahnge your language. </p>
            <a class="Rn" href="#">Start</a>
            </div>
        </div>
    </div>
-->
<!--footer -->
<footer id="about" >
    <div class="footer-content">
        <div class="left boxx">
            <h2>About us</h2>
            <div class="social-content">
                <p>Funeral is a non profit organization volunteerly managed by students of KFUEIT to provide free services regarding to all funeral procedures to public</p>
                <div class="social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
                </div>
              </div>
            </div>
            <div class="center boxx">
                <h2>Address</h2>
                <div class="social-content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Rahim Yar Khan</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+92-304-4187896</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text"> talhaseraj92@gmail.com</span>
                    </div>
               </div>
         </div>




         <div class="right boxx">
            <h2>Contact us</h2>
            <div class="social-content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email *</div>
                        <input type="email" required="on">
                     </div>
                     <div class="msg">
                        <div class="text">Message</div>
                        <textarea rows="3" cols="25" required="on"></textarea>
                    </div>
                    <div class="btnsend">
                        <button type="submit">Send</button>
                        </div>

                   </form>
             </div>
          </div>
      </div>
</footer> 
    <script type="text/javascript">
    var pre=document.getElementById("loading");
    	function myfunction(){
    		
        pre.style.display='none';
    	}
    </script>
</body>

</html>