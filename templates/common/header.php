<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="header">
	<div class="page-title">
		<?php if (!empty($pagedate)) { ?>
		<h2><?php echo $pagedate; ?></h2>
		<?php } ?>
		<h1><?php echo $pagetitle; ?></h1>
	</div>
</div>
