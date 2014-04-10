<?php require_once "header.php"; ?>

    <div class="container">
		<ul class="wizard">         
			<li class="active"><span class="badge">1</span> <span class="hidden-xs">Welcome</span></li>
			<li><span class="badge">2</span> <span class="hidden-xs">Configuration</span></li>
			<li><span class="badge">3</span> <span class="hidden-xs">Installation</span></li>
			<li><span class="badge">4</span> <span class="hidden-xs">Finished</span></li>
		</ul>
		
		<div class="content">
			<h1>Welcome to the Ban-Management of tomorrow!</h1>
			<p class="lead">This Installer will guide you through the installation of the website interface.</p>
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