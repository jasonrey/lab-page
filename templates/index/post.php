<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div id="<?php echo $pageslug; ?>" class="post">
	<div class="container">
		<h3><a href="<?php echo Lib::url('page', array('slug' => $pageslug)); ?>"><?php echo $post->date; ?></a></h3>
		<h2><a href="<?php echo Lib::url('page', array('slug' => $pageslug)); ?>"><?php echo $post->title; ?></a></h2>
		<div class="content">
			<?php echo $pageview->loadTemplate($pageslug . '/content'); ?>
		</div>
	</div>
</div>
