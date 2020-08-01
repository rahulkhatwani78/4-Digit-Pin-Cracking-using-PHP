<html>
<head>
<title>Rahul Anilkumar Khatwani MD5</title>
</head>
<body>
<h1>MD5 cracker</h1>
<p>
	This application takes an MD5 hash
	of a four digit pin and check all 10,000
	possible four digit PINs to determine the PIN.
</p>
<pre>
Debug Output:
<?php
	global $pin, $check;
	$total_checks = 0;
	$start_time = microtime(true);	
	for($a=0; $a<=9; $a++) {
		for($b=0; $b<=9; $b++) {
			for($c=0; $c<=9; $c++) {
				for($d=0; $d<=9; $d++) {
					$pin = $a.$b.$c.$d;
					$check = hash('md5', $pin);
					$total_checks++;
					if($total_checks<=15) print $check." ".$pin."\n";
					if($check == $_GET['md5']) break;
				}
				if($check == $_GET['md5']) break;
			}
			if($check == $_GET['md5']) break;
		}
		if($check == $_GET['md5']) break;
	}
	$end_time = microtime(true);
	$elapsed_time = $end_time - $start_time;
	print "\nTotal checks: ".$total_checks;
	print "\nElapsed time: ".$elapsed_time."\n\n";
	$ans = "PIN: ";
	$ans .= ($check == $_GET['md5']) ? $pin : "Not Found";
	print $ans;
?>
</pre>
<form>
<input type="text" name="md5" size="40"/>
<input type="submit" value="Crack MD5"/>
</form>
</body>
</html>