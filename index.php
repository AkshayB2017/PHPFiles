<?php

echo "Hell World ";
echo "<br></br>";
$a="Rob";
  $b="Holding";
  echo $a." ".$b;
echo "<br></br>";

$num=10;
$num=$num+20;
echo $num;
echo "<br></br>";

$myArray=array("Calum","Chambers","Nacho","Montreal");

  print_r($myArray);
echo "<br></br>";


echo $myArray[1];
echo "<br></br>";

$langArrat=array("france"=>"French","USA"=>"English", "kerala"=>"Malayalam");
print_r($langArrat);
echo "<br></br>";
echo sizeof($langArrat);
echo "<br></br>";

if($a=="Rob")
  echo $a;
echo "<br></br>";

$age=25;

if($age>18)
  echo "You may proceed";
else
   echo "You are too young";
echo "<br></br>";

for($i=2;$i<=30;$i+=2)
{
  echo $i;
   echo "<br></br>";
}

foreach($langArrat as $key => $value)
{ echo "Array item".$key." is value".$value."<br>";
}
echo "<br></br>";

print_r($_GET);
echo "<br></br>";

echo "Hi there! ".$_GET['name'].":";

echo "<br></br>";

?>


  
 
   <p> Enter name:</p>

<form>
   <input type="text" name="name">
   <input type="submit" value="Go!">
</form>


