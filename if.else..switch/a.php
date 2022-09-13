<?php
 for ($x=0; $x<=7; $x++)
{
  for ($y=0; $y<=7; $y++)
	{
        if ((($y == 1 or $y == 5) and $x != 0) or (($x == 0 or $x == 3) and ($y > 1 and $y < 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "<br>";
}

?>