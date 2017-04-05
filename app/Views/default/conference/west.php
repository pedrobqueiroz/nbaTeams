<p><a href="<?= $this->url('conference_west'); ?>">West Conference</a></p>

<?php $this->layout('layoutBootstrap', ['title' => 'West Conference', 'currentPage' => 'west']) ?>

<?php $this->start('main_content') ?>
	<h2>West Conference</h2>
	<p>This is the West Conference</p>
	<p><a href="<?= $this->url('conference_east') ?>">East Conference</a></p>
	<p><a href="<?= $this->url('default_contact') ?>">Contact</a></p>
	<p><a href="<?= $this->url('default_home') ?>">Home</a></p>
<?php $this->stop('main_content') ?>