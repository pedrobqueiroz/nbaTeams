<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Accueil</h2>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
	<p><a href="<?= $this->url('default_contact') ?>">Contact</a></p>
	<p><a href="<?= $this->url('conference_east') ?>">East Conference</a></p>
	<p><a href="<?= $this->url('conference_west') ?>">Ouest Conference</a></p>
<?php $this->stop('main_content') ?>
