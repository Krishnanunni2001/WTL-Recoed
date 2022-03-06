<?php  
	$limit = 100;
	$init = 2;
	echo 'Prime number series from 1 to 100 is  -> ';
	while(TRUE)
	{
		$div = 2;
		if($init > $limit) 
		{
			break;
		}
		while(TRUE)
		{
			if($div > sqrt($init))
			{
				echo $init."  ";
				break;
			}
			if($init % $div == 0) 
			{
				break;
			}
			$div = $div + 1;
		}
		$init = $init + 1;
	}
?>