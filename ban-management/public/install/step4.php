<?php require_once "header.php"; ?>

    <div class="container">
		<ul class="wizard">
			<li class="text-muted"><span class="badge">1 <i class="fa fa-check fa-fw"></i></span> <span class="hidden-xs">Welcome</span></li>
			<li class="text-muted"><span class="badge">2 <i class="fa fa-check fa-fw"></i></span> <span class="hidden-xs">Configuration</span></li>
			<li class="text-muted"><span class="badge">3 <i class="fa fa-check fa-fw"></i></span> <span class="hidden-xs">Installation</span></li>
			<li class="active"><span class="badge">4</span> <span class="hidden-xs">Finished</span></li>
		</ul>

		<div class="content">
			<h1 class="text-success"><i class="fa fa-check"></i> Finished</h1><hr/>
			<p class="lead">Congratulations! Ban-Management has been installed successfully.</p>
			<p class="bg-warning">Please delete the installation directory at <kbd><?php echo getcwd(); ?></kbd>. We will remind you until you do it, so better do it now. ;)</p>
		</div>

		<div class="buttons">
			<a href="../" class="btn btn-success"><i class="fa fa-check"></i> Finish</a>
		</div>

		<div class="footer">
			<hr>
			&copy; 2014 by the <a href="https://github.com/ftbastler/Ban-Management-Web/graphs/contributors">Ban-Management WebApp crew</a>.
		</div>
    </div>

<?php require_once "footer.php"; ?>
