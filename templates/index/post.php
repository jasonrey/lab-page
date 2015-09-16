<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div id="<?php echo $post->slug; ?>" class="post">
	<h3><a href="<?php echo Lib::url('page', array('slug' => $post->slug)); ?>"><?php echo $post->date; ?></a></h3>
	<h2><a href="<?php echo Lib::url('page', array('slug' => $post->slug)); ?>"><?php echo $post->title; ?></a></h2>
	<div class="content">
		<?php echo $page->loadTemplate($post->slug . '/content'); ?>
	</div>
</div>
