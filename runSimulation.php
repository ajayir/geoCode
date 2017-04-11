<?php
	$out = exec('/usr/bin/python /home/rajayi/public_html/geoCoding/simulation.py > output.txt');
	exec("chmod 777 output.txt");
    	$simHandle = fopen("output.txt", 'r');
//	system("chmod 707 simOut.txt");
    	while (!feof($simHandle)){
   		$out = fgets($simHandle);
        	echo $out;
    	}

    	fclose($simHandle);
/*    	if (file_exists('.save')){
      		system("rm *.save");
    	}
	echo $simHandle;*/
?>
