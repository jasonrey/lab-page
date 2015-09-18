<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="menu-overlay"></div>
<div class="menu">
	<div class="menu-header">
		<div class="menu-button">
			<span class="menu-button-line line-top"></span>
			<span class="menu-button-line line-middle"></span>
			<span class="menu-button-line line-bottom"></span>
		</div>
	</div>
	<ul class="menu-items">
		<li class="menu-item menu-item-index"><a class="menu-item-link <?php if ($viewname === 'index') { ?>active<?php } ?>" href="<?php echo Lib::url('index'); ?>">Index</a></li>
		<?php foreach (Lib::view('page')->getPages() as $pageslug => $page) { ?>
		<li class="menu-item"><a class="menu-item-link <?php if ($viewname === 'page' && $pageslug === $slug) { ?>active<?php } ?>" href="<?php echo Lib::url('page', array('slug' => $pageslug)); ?>"><?php echo $page->title; ?></a></li>
		<?php } ?>
		<li class="menu-item menu-item-about"><a class="menu-item-link <?php if ($viewname === 'about') { ?>active<?php } ?>" href="<?php echo Lib::url('about'); ?>">About</a></li>
	</ul>
</div>
