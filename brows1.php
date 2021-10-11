<?php
   $conn=mysqli_connect('localhost','root','','funeral360');
     if($conn)
     {
         echo 'Connected';
         
         
     } else
          {
         echo'not connected';
     }
       


?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Search Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="font-size:25px;background-image: url(2915383-plexus-atoms-neutrons-electrons-protons___mixed-wallpapers.jpg);" >

<div class="container" style="background-color: lightpink">
  <h1>Search Result</h1>
    
    <table class="table" style="font-size:20px;color: black">
        <thead>
        <tr>
            <th >id</th> 
            <th>fname</th>  
            <th>lname</th>
            <th>email</th>
            <th>Password</th>
          
            </tr>
        
        </thead>
        <tbody>
        <?php
           $name=$_POST['name'];
       

  
                $data1="select * FROM users WHERE username='$name'";
                $query1=mysqli_query($conn,$data1);
            if($query1)
            {echo 'query run successfuly...!';}
            else
            {
                echo"error occured";
            }
            While($loop=mysqli_fetch_array($query1)){
            ?>
              <tr>
                 <td><?php echo $loop['sr']; ?></td>
                   <td><?php echo $loop['name']; ?></td>
                 <td><?php echo $loop['fathername']; ?></td>
                
                 <td><?php echo $loop['username']; ?></td>
                 <td><?php echo $loop['password']; ?></td>
          
               
                               
               </tr>
            <?php 
            }
           
            ?>  
        </tbody>

        
        
        
        
        
        
       
    
    
    
    </table>
   
    
    
 </div>

</body>
</html>
