<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
 		<h2>Sum of positive</h2>
		<div> 
			You get an array of numbers, return the sum of all of the positives ones.
			<br /><br />
			Example [1,-4,7,12] => 1 + 7 + 12 = 20
			<br /><br />
			Note: if there is nothing to sum, the sum is default to 0. 
			<br /><br />
		</div>
		<?php 
			function positive_sum($arr) 
			{
				$result = 0;
				for ($i = 0; $i < count($arr); $i++)
				{
					if ($arr[$i] >= 0)
					{
						$result += $arr[$i];
					}
				}
				return $result;
			}
			$result_of_function = "positive_sum";
			echo 
				"The result of the <strong>positive_sum</strong>
			   function is <strong>{$result_of_function([1,-4,7,12])}</strong> "
					. "with the example input above.</strong>";
		?>
  </body>
</html>
