<?php

	function output($type, $text) {
		$output = '<script type="text/javascript">document.getElementById("output").innerHTML = document.getElementById("output").innerHTML + "<br />> ';
		$output .= ($type == 1 ? '<font color=\'red\'>'.$text.'</font>";' : $text.'";');
		$output .= ($type == 1 ? 'document.getElementById("progress-bar").style.display = "none";' : '');
		$output .= '</script>';

		echo $output;
		echo str_repeat(' ', 1024*64);
		flush();
	}

	function finish() {
		echo '<script type="text/javascript">window.location = "step4.php";</script>';
		echo str_repeat(' ', 1024*64);
		flush();
	}

	function install() {
		
		output(0, "Starting to install");
		$url = '../../';

		if (is_writable($url.'app/config/app.php') && is_writable($url.'app/config/database.php')) {
				output(0, "Starting to install");

				$checksum = 0;

				sleep(1);

				output(0, "Opening configuration files");
				$app_config = file_get_contents($url.'app/config/app.php');
				$db_config = file_get_contents($url.'app/config/database.php');

				output(0, "Inserting settings");
				$app_config = str_replace(".LOCALE", $_POST['locale'], $app_config, $checksum);
				$app_config = str_replace(":URL", $_POST['location'], $app_config, $checksum);
				$app_config = str_replace(":KEY", $_POST['key'], $app_config, $checksum);

				output(0, "Inserting database info");
				$db_config = str_replace(":HOST", $_POST['hostname'], $db_config, $checksum);
				$db_config = str_replace(":DATABASE", $_POST['database'], $db_config, $checksum);
				$db_config = str_replace(":USERNAME", $_POST['username'], $db_config, $checksum);
				$db_config = str_replace(":PASSWORD", $_POST['password'], $db_config, $checksum);
				$db_config = str_replace(":PREFIX", $_POST['prefix'], $db_config, $checksum);

				sleep(1);

				output(0, "Saving configuration files");
				file_put_contents($url.'app/config/app.php', $app_config);
				file_put_contents($url.'app/config/database.php', $db_config);

				output(0, "Done.");

				sleep(2);

				finish();
		}
		else {
			if(!is_writable($url.'app/config/app.php')) {
				output(1, "No permissions for file: <em>app/config/app.php</em>");
			}
			if (!is_writable($url.'app/config/database.php')) {
				output(1, "No permissions for file: <em>app/config/database.php</em>");
			}

			output(1, "Installation canceled");
		}
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		install();
	} else {
		output(1, "Can't install. Please go back to configuration. (Error #001)");
	}

?>
