<?php

require_once 'header.php';

function getSecretKey($total_lenght) {
    $output_code = NULL;
    $total_lenght - 1;
    $part = 1;
    $code = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
    while ($part <= $total_lenght) {
        $output_code .= $code[rand(0,61)];
        $part ++;
    }
    return $output_code;
}

function getUrl() {
	$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
	$url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
	$url .= $_SERVER["REQUEST_URI"];
	return $url;
}

 ?>
 
    <div class="container">
		<ul class="wizard">
			<li class="text-muted"><span class="badge">1 <i class="fa fa-check fa-fw"></i></span> <span class="hidden-xs">Welcome</span></li>
			<li class="active"><span class="badge">2</span> <span class="hidden-xs">Configuration</span></li>
			<li><span class="badge">3</span> <span class="hidden-xs">Installation</span></li>
			<li><span class="badge">4</span> <span class="hidden-xs">Finished</span></li>
		</ul>

		<div class="content">
			<h1>Configuration</h1><hr/>
			<form name="form" class="row center-text" action="step3.php" method="post" role="form">
				<div class="form-section col-sm-6">
					<h2>Database</h2>
					<div class="form-group">
						 <label>Hostname</label><input type="text" class="form-control" name="hostname" placeholder="localhost" required autofocus="true" />
					</div>
					<div class="form-group">
						 <label>Username</label><input type="text" class="form-control" name="username" placeholder="root" required />
					</div>
					<div class="form-group">
						 <label>Password</label><input type="password" class="form-control" name="password" placeholder="" />
					</div>
					<div class="form-group">
						 <label>Database</label><input type="text" class="form-control" name="database" placeholder="ban-management" required />
					</div>
				</div>

				<div class="form-section col-sm-6">
					<h2>System settings</h2>
					<div class="form-group">
						 <label>Site URL</label><input type="text" class="form-control" name="location" placeholder="http://www.awesome-server.com/ban-management" />
						 <span class="help-block">We think this is: <?php echo str_replace("public/install/step2.php", "", getUrl()); ?></span>
					</div>
					<div class="form-group">
						 <label>Locale</label>
						 <select name="locale" size="1" class="form-control">
						  <option>en</option>
						  <option>de</option>
						</select>
					</div>
					<div class="form-group">
						 <label>Security Key</label><input type="text" class="form-control" name="key" maxlength="32" value="<?php echo getSecretKey(32) ?>" required readonly />
						 <span class="help-block">This key was generated randomly only for your site. Don't give it away!</span>
					</div>
					<div class="form-group">
						<label><i class="fa fa-info-circle"></i> Heads up!</label>
						 <p>Once the installation is finished, please create a master account for the admin panel.</p>
					</div>
				</div>
			</form>
		</div>

		<div class="buttons">
			<button onclick="submitForm();" class="btn btn-primary">Continue <i class="fa fa-chevron-right"></i></button>
		</div>

		<div class="footer">
			<hr>
			&copy; 2014 by the <a href="https://github.com/ftbastler/Ban-Management-Web/graphs/contributors">Ban-Management WebApp crew</a>.
		</div>
    </div>

<?php require_once "footer.php"; ?>
