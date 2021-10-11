<?php 
$covid =0;
$murder =0;
$natural =0;
$accidental =0;
$unknown =0;


$results = mysqli_query($conn, "SELECT * FROM Funerals");
while ($row = mysqli_fetch_array($results)) 
{
   $cod=$row['cod']; 
    if($cod=="natural")
    {
        $natural++;
    }
    else if($cod=="murder")
    {
         $murder++;
        
    }
    else if($cod=="covid")
    {
         $covid++;
        
    }
    else if($cod=="accidental")
    {
         $accidental++;
        
    }
    else if($cod=="unknown")
    {
         $unknown++;
        
    }
    else
    {
        
    }
    
    
    
}






?>