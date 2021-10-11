<!DOCTYPE html>


<?php
include("database.php");
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM funerals WHERE sr=$id");

		//if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
            $name=$n['name'];
            $sr=$n["sr"];
            $fathername=$n['fathername'];
            $age=$n['age'];
            $cod=$n['cod'];
            $dat=$n['dat'];
            $fpc=$n['fpc'];
            $address=$n['address'];
            $lat=$n['lat'];
            $lng=$n['lng'];
		// }
	}
?>
<html lang="en">

<head>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Edit Activity</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
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
<!--                          <a href="#">Menu<i class="fas fa-caret-down"></i></a>-->
                            <!-- DropDown-->
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
<!--                            <a href="#">Services<i class="fas fa-caret-down"></i></a>    -->
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
                                echo  "<a href='login/profile.php' class='btn solid'>$data</a>";
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
            <div id="googleMap" class="animate__animated animate__fadeInUpBig" style="width:50%;height:490px;
    margin-right:2%;
    float: left;"></div>
                <div class="" style="width:100%,
    float: left;"><center><form action="updateActivity.php" method="post">
                    <h3>Edit Funeral Details </h3>
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                    <a>Name : </a>
                    <div ><input id="name" name="name" value="<?php echo $name; ?>" type="text" required/></div>
                    <a>Father Name :</a>
                    <div ><input id="fathername" name="fathername" value="<?php echo $fathername; ?>"  type="text" required/></div>
                    <a>Age :</a>
                    <div ><input id="age" name="age" value="<?php echo $age; ?>" type="text" required/></div>
                    <a>Cause Of death :</a>
                     <div >
                        <input list="cod" name="cod" value="<?php echo $cod; ?>" >
                        <datalist id="cod">
                        <option value="natural">
                        <option value="covid">
                        <option value="unknown">
                        <option value="accidental">
                        <option value="murder">
                        </datalist>
                    </div>
                    <a>Date and time of janaza :</a>
                    <div ><input id="dat" name="dat" value="<?php echo $dat; ?>" type="datetime-local" required/></div>
                    <a>Focal Person Contact :</a>
                    <div ><input id="fpc" name="fpc" value="<?php echo $fpc; ?>" type="text" required/></div>
                    <a>Address :</a>
                    <div ><input id="address" name="address" value="<?php echo $address; ?>" type="text" required/></div>
                    <a>MAP LOCATION :</a>
                    <div ><input id="lat" name="lat" value="<?php echo $lat; ?>" type="text" readonly/></div>
                    <div ><input id="lng" name="lng" value="<?php echo $lng; ?>"  type="text" readonly/></div>
                    <input type="submit" value="UPDATE" class="btn"/>
                    
  
                    
                    </form></center></div>

        <script>
            function myMap() {
                var mapProp= {
                    zoom:14,
                    center:{lat:28.420240,lng:70.295181}
                }
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                var marker = new google.maps.Marker({
                    position:{lat:28.4177459,lng:70.29393619999999},
                    map:map,
                    draggable:true
                    
                });
                google.maps.event.addListener(marker, 'dragend', function(evt){
                document.getElementById('lat').value = marker.getPosition().lat();
                document.getElementById('lng').value = marker.getPosition().lng();
                    
});
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

<!--
    <div class="Servicebox">

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