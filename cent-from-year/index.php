<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Century From Year</title>
  <link rel="stylesheet" href="../styles.css" type="text/css">
  </head>
  <body>
		<h2>Century From Year</h2>
		<h3>Introduction</h3>
			<p>The first century spans from the <strong>year 1</strong> up to and <strong>including the year 100, 
				The second </strong>- <em>from the year 101 up to and including the year 200, etc.</em></p>
		<h3>Task:</h3>
			<p>Given a year, return the century it is in.</p>
    <h3>Input , Output Examples ::</h3>
<pre>
centuryFromYear(1705)  returns (18)
centuryFromYear(1900)  returns (19)
centuryFromYear(1601)  returns (17)
centuryFromYear(2000)  returns (20)
</pre>
			<p>Hope you enjoy it..Awaiting for Best Practice Codes</p>
			<p>Enjoy Learning!!</p>
	<?php
		function centuryFromYear($year)
		{
			// have to -1 the year to account for edge case
			// where the year lands on the century mark.
			return intval(floor(($year - 1) / 100)) + 1;
		}
		$result = "centuryFromYear";
		echo "<p>1705 is the {$result(1705)}th century<br />";
		echo "1900 is the {$result(1900)}th century<br />";
		echo "1601 is the {$result(1601)}th century<br />";
		echo "2000 is the {$result(2000)}th century</p>";
	?>
<figure>
<figcaption>My Solution</figcaption>
<pre>
<code> <b>function</b> centuryFromYear(<u>$year</u>)</code>
<code> {</code>
<code>   <i> // have to -1 the year to account for edge case</i></code>
<code>   <i> // where the year lands on the century mark.case</i></code>
<code>   <b>return</b> <b>intval</b>(<b>floor</b>((<u>$year</u> - 1) / 100)) + 1;</code>
<code> }</code>
</pre>
</figure>
<figure>
<figcaption>Model Solution</figcaption>
<pre>
<code> <b>function</b> centuryFromYear(<u>$year</u>)</code>
<code> {</code>
<code>   <b>return</b> <b>ceil</b>(<u>$year</u> / 100);</code>
<code> }</code>
</pre>
</figure>
  </body>
</html>
