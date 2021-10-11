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
  <title>data showing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="font-size:25px" >

<div class="container" style="background-color: cadetblue">
  <h2>Table for storing data</h2>
     <form class="navbar-form navbar-right" action="brows1.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="name">
      </div>
      <button type="submit" class="btn btn-default" name="submit" target="_blank">Submit</button>
    </form>
    <table class="table" style="font-size:20px;color: black">
        <thead>
        <tr>
            <th >id</th> 
            <th>fname</th>  
            <th>lname</th>
            <th>email</th>
            <th>Password</th>
            <th>Delete Row</th>
            <th>Update data</th>
           
            </tr>
        
        </thead>
        <tbody>
        <?php
            $query="select * from users";
            $run=mysqli_query($conn,$query);
            if($run)
            {echo 'query run successfuly...!';}
            else
            {
                echo"error occured";
            }
            While($loop=mysqli_fetch_array($run)){
            ?>
              <tr>
                 <td><?php echo $loop['sr']; ?></td>
                   <td><?php echo $loop['name']; ?></td>
                 <td><?php echo $loop['fathername']; ?></td>
                
                 <td><?php echo $loop['username']; ?></td>
                 <td><?php echo $loop['password']; ?></td>
          
                  <td><a href="del.php? id=<?php echo $loop['id'] ?>  " target="_blank" style="color:black" >Delete </a></td>
                         <td  > <a href="update1.php?id=<?php echo $loop['id']?>" target="_blank"style="color:black"  >edit </a></td>
                
                                                
               </tr>
            <?php 
            }
           
            ?>  
        </tbody>

        
        
        
        
        
        
       
    
    
    
    </table>
   
    
    
 </div>

</body>
</html>
