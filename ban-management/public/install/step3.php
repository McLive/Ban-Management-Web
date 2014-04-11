<?php require_once "header.php"; ?>

    <div class="container">
		<ul class="wizard">
			<li class="text-muted"><span class="badge">1 <i class="fa fa-check fa-fw"></i></span> <span class="hidden-xs">Welcome</span></li>
			<li class="text-muted"><span class="badge">2 <i class="fa fa-check fa-fw"></i></span> <span class="hidden-xs">Configuration</span></li>
			<li class="active"><span class="badge">3</span> <span class="hidden-xs">Installation</span></li>
			<li><span class="badge">4</span> <span class="hidden-xs">Finished</span></li>
		</ul>

		<div class="content">
			<h1>Installing...</h1><hr/>
			<p class="lead">Please wait while we make everything ready for you.</p>

			<div class="progress progress-striped active">
				<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" id="progress-bar">
				<span class="sr-only">Installing...</span>
			  </div>
			</div>
			
			<pre class="console" id="output"><strong>Console:</strong></pre>
		</div>

		<div class="buttons">
		</div>

		<div class="footer">
			<hr>
			&copy; 2014 by the <a href="https://github.com/ftbastler/Ban-Management-Web/graphs/contributors">Ban-Management WebApp crew</a>.
		</div>
    </div>

<?php require_once "installer.php"; ?>
	
<?php require_once "footer.php"; ?>