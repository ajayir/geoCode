			<?php 
				ob_start();
				//ini_set('display_errors', 1);
				//error_reporting(E_ALL);
				$lat_long = $_POST['location_One'];
				$lat_long2 = $_POST['location_Two'];

				//print_r($_POST);

				$locationHandle = fopen("location1.txt", 'w');
				fwrite($locationHandle, $lat_long);
				fclose($locationHandle);

				$locationHandle2 = fopen("location2.txt", 'w');
				fwrite($locationHandle2, $lat_long2);
				fclose($locationHandle2);
				//$out = 'python simulation.py' . $lat_long . ' ' . $lat_long2;
				//$command = passthru($out);
				//$out = exec("python simulation.py");

				//echo $out;
				//$report = `PYTHON_PATH=. /usr/bin/python simulation.py`;

				if ($report !== FALSE) {
					//echo $report;
					`PYTHON_PATH=. /usr/bin/python simulation.py > output.txt`;
					$outHandle = fopen("output.txt", 'r');
					$count = 1;
					while (!feof($outHandle)){
						$out = fgets($outHandle);
						if ($count < 3 && isset($lat_long) && isset($lat_long2)){
							echo "Location $count: " . "$out . <br><br>";
							$count = $count + 1;
						}
					}
					fclose($outHandle);
				}
				else {
					die("Couldn't run coordinates (return status $retval: " . error_get_last()["message"] . ")");
				}

				ob_end_flush(); 
				
			?>
