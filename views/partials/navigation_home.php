<h2 class="content_title"><img src="<?= $modules_assets ?>withings_32.png"> Withings</h2>
<ul class="content_navigation">
	<?= navigation_list_btn('home/withings', 'Recent') ?>
	<?= navigation_list_btn('home/withings/custom', 'Custom') ?>
	<?php if ($logged_user_level_id <= 2) echo navigation_list_btn('home/withings/manage', 'Manage', $this->uri->segment(4)) ?>
</ul>