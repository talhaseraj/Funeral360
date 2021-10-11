<?php 
$zerotoone =0;
$onetotwenty =0;
$twentytofourty =0;
$fourtytosixty =0;
$sixtytoeighty =0;
$eightyplus =0;

$results = mysqli_query($conn, "SELECT * FROM Funerals");
while ($row = mysqli_fetch_array($results)) 
{
   $age=$row['age']; 
    if($age<=1)
    {
        $zerotoone++;
    }
    else if($age>1 && $age<=20)
    {
         $onetotwenty++;
        
    }
    else if($age>20 && $age<=40)
    {
         $twentytofourty++;
        
    }
    else if($age>40 && $age<=60)
    {
         $fourtytosixty++;
        
    }
    else if($age>60 && $age<=80)
    {
         $sixtytoeighty++;
        
    }
    else if($age>80)
    {
         $eightyplus++;
        
    
    }
    else
    {
        
    }
    
    
    
}






?>