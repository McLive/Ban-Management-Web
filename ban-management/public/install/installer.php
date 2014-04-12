<?php

	function output($type, $text) {
		$output = '<script type="text/javascript">document.getElementById("output").innerHTML = document.getElementById("output").innerHTML + "<br />> ';
		$output .= ($type == 1 ? '<font color=\'red\'>'.$text.'</font>";' : $text.'";');
		$output .= ($type == 1 ? 'document.getElementById("progress-bar").style.display = "none";' : '');
		$output .= ($type == 1 ? 'document.getElementById("back").innerHTML = "<a class=\"btn btn-danger\" href=\"step2.php\"><i class=\"fa fa-chevron-left\"></i> Back</a>"' : '');
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
		$checksum = 0;

		sleep(1);

		if(!is_readable($url.'app/config/app.php')) {
			output(1, "Can't install. Can not read from app.php. (Error #002)");
			return;
		}

		if(!is_readable($url.'app/config/database.php')) {
			output(1, "Can't install. Can not read from database.php. (Error #003)");
			return;
		}

		if(!is_writable($url.'app/config/app.php')) {
			output(1, "Can't install. Can not write to app.php. (Error #004)");
			return;
		}

		if(!is_writable($url.'app/config/database.php')) {
			output(1, "Can't install. Can not write to database.php. (Error #005)");
			return;
		}

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


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		install();
	} else {
		output(1, "Can't install. Please go back to configuration. (Error #001)");
	}

?>
