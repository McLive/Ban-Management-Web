<?php require_once "header.php"; ?>

    <div class="container">
		<ul class="wizard">
			<li class="active"><span class="badge">1</span> <span class="hidden-xs">Welcome</span></li>
			<li><span class="badge">2</span> <span class="hidden-xs">Configuration</span></li>
			<li><span class="badge">3</span> <span class="hidden-xs">Installation</span></li>
			<li><span class="badge">4</span> <span class="hidden-xs">Finished</span></li>
		</ul>

		<div class="content">
			<h1>Welcome to the Ban-Management of tomorrow!</h1><hr/>
			<p class="lead">This Installer will guide you through the installation of the website interface.</p>
			<br />
			<h2>Requirements</h2>
			<ul>
				<li>Ban-Management installed on your Bukkit server</li>
				<li>Ban-Management connected to a MySQL database</li>
				<li>PHP 5.3.7 or higher installed on your web server</li>
				<li>MCrypt PHP Extension installed on your web server</li>
			  </ul>
		</div>

		<div class="buttons">
			<a href="step2.php" class="btn btn-primary">Continue <i class="fa fa-chevron-right"></i></a>
		</div>

		<div class="footer">
			<hr>
			&copy; 2014 by the <a href="https://github.com/ftbastler/Ban-Management-Web/graphs/contributors">Ban-Management WebApp crew</a>.
		</div>
    </div>

<?php require_once "footer.php"; ?>
