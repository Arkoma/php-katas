<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
		<link rel="stylesheet" href="../styles.css" type="text/css">
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
		<figure>
			<figcaption><b>My Solution</b></figcaption>
				<pre>
<code>  <b>function</b> positive_sum(<u>$arr</u>) {</code>
<code>    <u>$result</u> = 0;</code>
<code>    <b>for</b> (<u>$i</u> = 0; <u>$i</u> < <b>count</b>(<u>$arr</u>); <u>$i++</u>) {</code>
<code>      <b>if</b> (<u>$arr</u>[<u>$i</u>] >= 0) {</code>
<code>        <u>$result</u> += <u>$arr</u>[<u>$i</u>];</code>
<code>      }</code>
<code>    }</code>
<code>    <b>return</b> <u>$result</u>;</code>
<code>  }</code>
				</pre>
		</figure>
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
		<figure>
			<figcaption><b>Model Solution</b></figcaption>
				<pre>
<code>  <b>function</b> positive_sum(<u>$a</u>) {</code>
<code>   <b>return</b> <b>array_sum</b>(<b>array_filter</b>(<u>$a</u>, <b>function</b> (<u>$n</u>) {<b>return</b> <u>$n</u> > 0;})); </code>
<code>  } </code>
				</pre>
  </body>
</html>
