<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Smallest Integer</title>
  <link rel="stylesheet" href="../styles.css" type="text/css">
  </head>
  <body>
		<h2>Find the smallest integer in the array</h2>
		<div>
			Given an array of integers your solution should find the smallest integer.
			<br /><br />
			For exmple:
			<br /><br />
			<ul>
				<li> Given <pre>[34, 15, 88, 2]</pre> your solution will return <b> 2 </b><br /><br /></li>
				<li> Given <pre>[34, -345, -1, 100]</pre> your solution will return <b> -345 </b><br /><br /></li>
			</ul>
			You can assume, for the purose of this kata, that the supplied array will not be empty.
		</div>
		<br /><br />
		<?php
			function smallestInteger($arr) {
				return min($arr);
			}
			$result = "smallestInteger";
			echo "The result using the first example is <b>{$result([34, 15, 88, 2])}</b><br /><br /> ";
			echo "The result using the second example is <b>{$result([34, -345, -1, 100])}</b><br /><br /> ";
		?>
<figure>
<figcaption>My Solution</figcaption>
<pre>
<code>  <b>function</b> smallestInteger(<u>$arr</u>) {</code>
<code>    <b>return</b> <b>min</b>(<u>$arr</u>);</code>
<code>  }</code>
</pre>
</figure>
  </body>
</html>
