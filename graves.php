<!DOCTYPE html>
<?php
include("database.php");
include("showGraves.php");
?> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Grave Locations</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
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
                        <li class="nav-link" style="--i: .85s">
                            <a href="index.php">Funerals</a>
                            
                            <!-- DropDown-->
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Services<i class="fas fa-caret-down"></i></a>    
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#about">About</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign animate__animated animate__fadeInRightBig" style="--i: 1.8s">
                    <?php
						
                            if(isset($_SESSION["user"])){
                                $data=$_SESSION["user"];
								//echo "USER : $data";
                                 echo  "<a href='login/profile.php' class='btn solid'>$data</a>";
                                echo  "<a href='logout.php' class='btn transparent'>Logout</a>";
                                echo  "<a href='myActivities.php' class='btn transparent'>My Activities</a>";
                        
                                
                            }
                    else{
                    echo  "<a href='login/loginPage.php' class='btn transparent'>Log in</a>";
                    echo  "<a href='login/loginPage.php' class='btn solid'>Sign up</a>";
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
            <div id="googleMap" class="animate__animated animate__fadeInUpBig" style="width:100%;height:545px;"></div>

        <script>

            function myMap() {

                var mapProp= {
                    zoom:14,
                    center:{lat:28.420240,lng:70.295181}
                }
                
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                navigator.geolocation.getCurrentPosition(function (position) {
                initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                map.setCenter(initialLocation);
                });                
               
                
                
                	<?php while ($row = mysqli_fetch_array($results)) { ?>

                addMarker({
                    coords :{lat:<?php echo $row['gravelat'];?>,lng:<?php echo $row['gravelng'];?>},
                    content:'<h2>Personal Details :</h2><br><b>Name</b> :<?php echo $row['name'];?><b>  Father Name</b> :<?php echo $row['fathername'];?><br> <b>Cause of Death </b>:<?php echo $row['cod'];?><br><b> Age </b>: <?php echo $row['age'];?><br><h2>Funeral Details : </h2><br><b>Time And Date :<?php echo $row['dat'];?></b><br><b>Address :</b><?php echo $row['address'];?><br><b>For Details Contact :</b><?php echo $row['fpc'];?><br><h2>Grave Details :</h2><br><b>Kin Name : </b><?php echo $row['kinname'];?><br><b>Kin Contact : </b><?php echo $row['kincontact'];?><br><b>GraveYard : </b><?php echo $row['graveyard'];?>'      
                          });
                	<?php } ?>

                
                
                function addMarker(props){
                        var marker = new google.maps.Marker({
                        position:props.coords,

                        map:map,
                        icon:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",

                    });
                    var infoWindow = new google.maps.InfoWindow({

                         content: props.content
                   
                        });
                    marker.addListener('click',function(){
                        infoWindow.open(map,marker); 
                        });    
                }
                
            }
                            getLocation();

            function getLocation() {
                    if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition();
                } else { 
                        }
}
            
            
            
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlgnzKCa3prXxdxz20PTOOG4sjEluo7i4&callback=myMap"></script>

            
            
            
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
                        echo "<a class='Rn' href='login/loginPage.php'>Click Here To Login</a>";                    
                    }
                            ?>
                
                
            
            </div>
        </div>
<!--
        <div  class="box">
            <div class="icon">STT</div>
            <div class="content">
                <h3>Speech to text conversion</h3>
                <p>In this module you can speak and our smart system convert your speech into text.
                You can cahnge your language. </p>
            <a class="Rn" href="#">Start</a>
            </div>
        </div>
-->
    </div>
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
                        <span class="text"> TALHASERAJ92@gmail.com</span>
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