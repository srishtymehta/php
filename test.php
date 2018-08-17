<?php
for($k=1;$k<=5;$k++)
    {
    for($l=1;$l<=5;$l++)
        {
        if($k==1 | $k==5 |$l==1 | $l==5 )
            { 
            echo ("*  ");
            }
        
        else
            {
            echo str_repeat("&nbsp;",3);
            }
        }
        echo ("<br>");
    }
for ($i = 1; $i <= 5; $i++)
	{
		for ($j = 1; $j <= 5; $j++)
		{
			if ( ($i==1 && ($j <= 2 || $j== 3 ||$j==5))||($i==2 &&($j==3||$j==5))||($i==3)||
			($i==4 &&($j==1||$j==3))|| ($i==5 &&($j==1||$j>=3) ))		 
				echo("* ");	
				else echo str_repeat("&nbsp;",3);
				
 		    
		}
		echo("<br>");
	}

?>
