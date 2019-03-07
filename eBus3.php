<!DOCTYPE html>
<html> 
    <body background="lightblue.jpg">
    
    
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];
 $fullNumValue= $_POST ['txtNum'];
 echo "The name is : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The phone number is : ".$fullNumValue.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2."";
 ?>
    </body>
</html>
    
    
    
    
    
    
    
    
    




