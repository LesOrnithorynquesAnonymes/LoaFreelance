<body>

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar notlogged">
	<div class="container"><a class="navbar-brand logo" href="#">Freelancer.com</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse"
			 id="navcol-1">
			<ul class="nav navbar-nav ml-auto">
				<?php if ($place === 'registration'): ?>
					<li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('/') ?>">RETOUR</a></li>
				<?php elseif ($place === 'login'): ?>
					<li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('/') ?>">RETOUR</a></li>
				<?php elseif ($place === 'index'): ?>
					<li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('login') ?>">CONNEXION</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
