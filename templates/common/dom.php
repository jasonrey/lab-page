<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<!DOCTYPE html>
<html>
<head>
	<base href="/<?php echo Config::getBaseFolder(); ?>/" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />

	<link href="assets/css/rainbow-github.css" rel="stylesheet" type="text/css" />
	<script src="assets/js/rainbow.min.js" type="text/javascript"></script>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css' />

	<link rel="stylesheet<?php if (Config::env() === 'development') { ?>/less<?php } ?>" type="text/css" href="assets/css/base.<?php echo Config::env() === 'development' ? 'less' : 'css'; ?>" />
	<link rel="stylesheet<?php if (Config::env() === 'development') { ?>/less<?php } ?>" type="text/css" href="assets/css/common.<?php echo Config::env() === 'development' ? 'less' : 'css'; ?>" />
	<?php if (!empty($css)) { ?>
		<?php foreach ($css as $file) { ?>
		<link rel="stylesheet<?php if (Config::env() === 'development') { ?>/less<?php } ?>" type="text/css" href="assets/css/<?php echo $file; ?>.<?php echo Config::env() === 'development' ? 'less' : 'css'; ?>" />
		<?php } ?>
	<?php } ?>
	<?php if (Config::env() === 'development') { ?>
	<script type="text/javascript" src="assets/js/less.min.js"></script>
	<?php } ?>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>

	<script type="text/<?php echo Config::env() === 'development' ? 'coffeescript' : 'javascript'; ?>" src="assets/js/common.<?php echo Config::env() === 'development' ? 'coffee' : 'js'; ?>"></script>

	<?php if (!empty($js)) { ?>
		<?php foreach ($js as $file) { ?>
		<script type="text/<?php echo Config::env() === 'development' ? 'coffeescript' : 'javascript'; ?>" src="assets/js/<?php echo $file; ?>.<?php echo Config::env() === 'development' ? 'coffee' : 'js'; ?>"></script>
		<?php } ?>
	<?php } ?>

	<?php if (Config::env() === 'development') { ?>
	<script type="text/javascript" src="assets/js/coffee-script.js"></script>
	<?php } ?>

	<title><?php echo !empty($pagetitle) ? $pagetitle : Config::getPageTitle(); ?></title>
</head>
<body>
<?php echo Lib::output('common/menu', array('viewname' => $viewname, 'slug' => !empty($slug) ? $slug : '')); ?>
<?php echo Lib::output('common/header', array('pagetitle' => !empty($pagetitle) ? $pagetitle : Config::getPageTitle(), 'pagesubtitle' => !empty($pagedate) ? $pagedate : 'jsonobject.io')); ?>
<div class="wrapper">
<?php echo $body; ?>
</div>
</body>
</html>
