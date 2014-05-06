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
		output(0, "");

		$url = '../../';
		$checksum = 0;

		sleep(1);

		if(!is_readable($url.'app/config/app.php')) {
			output(1, "Can't install. Can not read <em>from app/config/app.php</em>. (Error #002)");
			return;
		}

		if(!is_readable($url.'app/config/database.php')) {
			output(1, "Can't install. Can not read from <em>app/config/database.php</em>. (Error #003)");
			return;
		}

		if(!is_readable('database.sql')) {
			output(1, "Can't install. Can not read from <em>public/install/database.sql</em>. (Error #008)");
			return;
		}

		if(!is_writable($url.'app/config/app.php')) {
			output(1, "Can't install. Can not write to <em>app/config/app.php</em>. (Error #004)");
			return;
		}

		if(!is_writable($url.'app/config/database.php')) {
			output(1, "Can't install. Can not write to <em>app/config/database.php</em>. (Error #005)");
			return;
		}

		output(0, "Connecting to database");
		$con = @mysql_connect($_POST['hostname'], $_POST['username'], $_POST['password']);
		if(!$con) {
			output(1, "Can't connect to database. Check your database information. (Error #006)");
			output(1, mysql_error());
			return;
		}

		output(0, "Successfully connected");
		output(0, "Selecting database");

		sleep(1);

		$db = @mysql_select_db($_POST['database']);
		if(!$db) {
			output(1, "Can't select database. Check your database information. (Error #007)");
			output(1, mysql_error());
			return;
		}

		output(0, "Successfully opened a SQL connection.");
		output(0, "Installing database tables");

		sleep(1);

		$templine = '';
		$lines = file('database.sql');
		foreach($lines as $line)
		{
			if(substr($line, 0, 2) == '--' || $line == '')
				continue;
			$templine .= $line;
			if(substr(trim($line), -1, 1) == ';')
			{
				output(0, "Executing query: ".$templine);
				$query = @mysql_query($templine);
				if(!$query) {
					output(1, "Error while installing. Could not execute query. (Error #009)");
					output(1, mysql_error());
					return;
				}
				$templine = '';
			}
		}

		output(0, "Installed database successfully.");
		output(0, "");

		sleep(1);

		output(0, "Opening configuration files");
		$app_config = file_get_contents($url.'app/config/app.php');
		$db_config = file_get_contents($url.'app/config/database.php');

		output(0, "Inserting settings");
		$app_config = str_replace(":LOCALE", $_POST['locale'], $app_config, $checksum);
		$app_config = str_replace(":URL", $_POST['location'], $app_config, $checksum);
		$app_config = str_replace(":KEY", $_POST['key'], $app_config, $checksum);

		output(0, "Inserting database info");
		$db_config = str_replace(":HOSTNAME", $_POST['hostname'], $db_config, $checksum);
		$db_config = str_replace(":DATABASE", $_POST['database'], $db_config, $checksum);
		$db_config = str_replace(":USERNAME", $_POST['username'], $db_config, $checksum);
		$db_config = str_replace(":PASSWORD", $_POST['password'], $db_config, $checksum);

		sleep(1);

		output(0, "Saving configuration files");
		file_put_contents($url.'app/config/app.php', $app_config);
		file_put_contents($url.'app/config/database.php', $db_config);

		file_put_contents($url.'public/installed.lock', "");
		
		output(0, "");
		output(0, "Success!");

		sleep(4);

		finish();
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		install();
	} else {
		output(1, "Can't install. Please go back to configuration. (Error #001)");
	}

?>
