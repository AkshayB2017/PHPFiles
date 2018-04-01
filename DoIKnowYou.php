<?php
  if($_POST)
  { $family=array("Akshay","Balakrishnan","Kurian","Thomas");
     $isKnown=false;
     foreach($family as $value)
     { if($value==$_POST['name'])
     {  $isKnown=true;
     }  
       
     }
   if($isKnown)
   {  echo "Hi There! ";
   }
    else
    {  echo "I don't know you!";
    }
  }
?>

<p>Please enter name.</p>

<form method="post">

    <input type="text" name="Name">
    
    <input type="submit" value="Go!">
    
</form>
